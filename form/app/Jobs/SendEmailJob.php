<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmailMailable;
use App\Models\User;
class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    
    public function __construct( private User $user)
    {
        $this->user = $user;

    /**
     * Execute the job.
     */
    }
     public function handle(): void
    {
        $user = $this->user;
        Mail::to($user->email)->send(new SendEmailMailable($user->name));
    }
}
