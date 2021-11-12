<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Gate;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function __construct()
    {
        $this->middleware('auth');
        /*$this->middleware(function($request, $next){
        *  if(Gate::allows('manage-users')) return $next($request);
        *  abort(403,'Anda tidak memiliki cukup hak akses');
        *  });
        */
    }
}
