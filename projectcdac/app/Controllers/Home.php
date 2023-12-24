<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard(): string
    {
        return view('dashboard');        
    }
    public function login(): string
    {
        return view('login');        
    }
    public function registration(): string
    {
        return view('registration');        
    }
     public function booktrain(): string
    {
        return view('booktrain');        
    }
     public function availabletrain(): string
    {
        return view('availabletrain');        
    }
     public function ticket(): string
    {
        return view('ticket');        
    }
    public function profile(): string
    {
        return view('profile');        
    }
}
