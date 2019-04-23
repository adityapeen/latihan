<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
    	$data = DB::table('mahasiswa')->get();
    	return view('mahasiswa', ['mhs' => $data]);
    }
}
