<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class guestController extends Controller
{
    //
    public function login()
    {
        if (!Auth::check()) {
            Auth::loginUsingId(5440);
        }
        return redirect()->route('home');
    }
}
