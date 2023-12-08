<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
    return view("homepage");
    }
    function tentang()
    {
    return view("halaman/tentang");
    }
    function kontak()
    {
    $data = [
    'judul' => 'Halaman Kontak',
                'kontak' => [
                'email' => 'dirumahafif@gmail.com',
                'youtube' => 'jerapahhantu'
                        ]
    ];
    return view("halaman/kontak")->with($data);
    }
}
