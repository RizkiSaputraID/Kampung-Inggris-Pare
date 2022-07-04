<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        return view('dashboard.account.index',[
            'title' => 'account',
            'active' => 'account',
        ]);
    }

    
}
