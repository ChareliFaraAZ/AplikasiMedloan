<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanPerawatan; // pastikan model ini ada

class CatatanPerawatanController extends Controller
{
public function index()
{
    $alatList = CatatanPerawatan::with('alat')
        ->where('status', 'PERLU PERAWATAN')
        ->get();

    return view('teknisi.index', compact('alatList'));
}


}
