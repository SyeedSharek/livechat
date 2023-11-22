<?php

namespace App\Http\Controllers;

use App\Events\SentMail;
use App\Models\User;
use App\Notifications\TestNotfication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;



class SubcriptionController extends Controller
{

    public function subscription()
    {

        $user = User::first();
        // $user->notify(new TestNotfication);
        SentMail::dispatch($user);
        dd("helllo");
    }
}
