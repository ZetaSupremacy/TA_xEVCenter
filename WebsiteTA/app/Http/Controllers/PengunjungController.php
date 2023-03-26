<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function registrasi(){
        return view('pengunjung.registrasi');
    }
}
