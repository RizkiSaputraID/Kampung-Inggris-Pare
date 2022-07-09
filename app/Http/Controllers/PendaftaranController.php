<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Http\Request;
use App\Models\User;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran',[
            'title' => 'Pendaftaran',
            'active' => 'pendaftaran',
        ]);
    }
    public function store(Request $request)
    {
       
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'nohp' => 'required|max:255',
            'alamat' => 'required|max:255',
            'kota' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
        ]);
        
        pendaftaran::create($validateData);

        return redirect('/posts')->with('success', ' Pendaftaran Sucsessfull!');

    }

    
    
}
