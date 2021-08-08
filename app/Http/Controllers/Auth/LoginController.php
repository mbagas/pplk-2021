<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    protected $redirectTo;
    
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function redirectTo()
    {
        
        switch(auth()->user()->roles_id){
            case 1:
                $this->redirectTo = '/dashboard';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/dashboardTugas';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/dashboardDaplokMentor';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = '/dashboardOrmawa';
                return $this->redirectTo;
                break;
            case 5:
                $this->redirectTo = '/home';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/home';
                return $this->redirectTo;
        }
        
       
    }
    
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
