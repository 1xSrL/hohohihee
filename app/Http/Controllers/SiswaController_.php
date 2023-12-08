<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    //
    function index()
    {
    //$data = siswa::all();
        $data = siswa::orderBy('nomor_induk', 'desc')->paginate(1);
        return view('siswa/index')->with('data', $data);
    }
     function detail($id)
     {
     //return "<h1>Saya SISWA dari Controller dengan id $id</h1>";
     $data = siswa::where('nomor_induk', $id)->first();
     return view('siswa/show')->with('data', $data);
     }
     funtion create(){

     }
     funtion delete(){

          }
}
