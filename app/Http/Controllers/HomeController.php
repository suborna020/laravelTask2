<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inbox()
    {
        // echo url('');
        // die();
        return view('home.dashboard');
    }
    public function outbox()
    {
        // echo url('');
        // die();
        return view('home.outbox');
    }
    public function sent()
    {
        // echo url('');
        // die();
        return view('home.sent');
    }
    public function settings()
    {
        // echo url('');
        // die();
        return view('home.settings');
    }
    public function logout()
    {
        return redirect(url('welcome'));
    }
}
