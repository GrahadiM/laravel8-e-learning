<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        if (auth()->user()->hasRole('admin'))
        {
            return redirect()->route('admin.dashboard');
        }
        elseif (auth()->user()->hasRole('dosen'))
        {
        return redirect()->route('dosen.dashboard');
        }
        elseif (auth()->user()->hasRole('mahasiswa'))
        {
            return redirect()->route('mahasiswa.dashboard');
        }
        else
        {
            return view('dashboard');
        }
    }
}
