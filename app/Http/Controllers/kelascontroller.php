<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelascontroller extends Controller
{
    public function create()
    {
        return view('kelas.crate');
    }
}
