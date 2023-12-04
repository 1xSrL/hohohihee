<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("halaman/index");
    }
    function tentang()
    {
        return view("halaman/tentang");
    }
    function kontak()
    {
        $data = [
            'judul' => 'Ini Adalah halaman kontak',
            'kontak' => [
                'email' => 'susilofaruq@gmail.com',
                'youtube' => 'selamat hari gue'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
