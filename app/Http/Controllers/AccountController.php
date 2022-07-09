<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pendaftaran;

class AccountController extends Controller
{
    public function index()
    {
        return view('dashboard.account.index', [
            'pendaftarans' => pendaftaran::where('id', auth()->user()->id)->get(),
        ]);
    }
    public function report()
    {
        return view('dashboard.account.report', [
            'pendaftarans' => pendaftaran::where('id', auth()->user()->id)->get(),
        ]);
    }

    
}
