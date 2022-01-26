<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $u_id = Auth::id();
        if ($u_id == 1) {
            $adminity = 1;//admin
            return redirect('admin');
        } else
        {
            $adminity=0;//guest
            return redirect('site');
        }

    }
}
