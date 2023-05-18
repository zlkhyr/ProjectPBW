<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index',[
            'halaman' => 'dashboard',
            'post' => Barang::all()
        ]);
    }
}
