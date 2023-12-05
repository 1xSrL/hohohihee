<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    function index()
    {
        $data = Siswa::all();
        return view('siswa/index')->with('data', $data);
    }
     function detail($id)
     {
        return "<h1>Saya SISWA dari Controller dengan id $id</h1>";
     }
}
