<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Jobs\SendEmailJob;
class AuthController extends Controller
{

    //Login View
    public function show(){
        return view("login");
    }
    
    //Home Page
    public function home(){
        return view("home",["user=>auth()->user()"]);
    }

    //Register
    public function register(Request $req){
        try{
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $req->password;
            $req->validate([
                'name' => 'required | string | max:255',
                'email'=> 'required | email',
                'password' => 'required | min:5 | max:20'

            ]);
            $user->save();

        
        } catch(\Exception $e) {
            return redirect("/");
        }

        //job to send e-mail after sucessful register
        $job = (new SendEmailJob($user))->delay(2);
        dispatch($job);

        return redirect("/");
    }

    //Login authentication
    public function login(Request $req){
            $req->validate([
                "email" => "required | email",
                "password" => "required | min:2 | max:15"
            ]);

            if(auth()->attempt(
                request()->only(["email","password"]),
                request()->filled("rememberme"))){
                return redirect("home");
            }

            return redirect()->back()->withErrors(["email" => "Invalid Credentials !"]);
    }

    //Logout 
    public function logout(){
            Session::flush();
            Auth::logout();
             return redirect("/");
    }
}
