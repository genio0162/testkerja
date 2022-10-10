<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('show_kry', [
            'users' => User::all()->sortBy('tanggal_bergabung')->take(3),
            'userss' => User::all()
        ]);

        dd('cutis');
    }
}
