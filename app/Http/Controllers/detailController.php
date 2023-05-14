<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class detailController extends Controller
{
    public function index($id)
    {
        $barang=Barang::find($id);
        return view('detail.index', compact('barang'));
    }
}
