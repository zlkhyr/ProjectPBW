<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;

class MypinjamController extends Controller
{
    public function index()
    {
        return view('mypinjam.index',[
            'halaman' => 'myborrowing',
            'barang' => Pinjam::where('id_peminjam', auth()->user()->id)->get()
        ]);
    }
}
