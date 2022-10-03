<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
  public function index()
  {
    return view('tagihan.index', [
      'title' => 'Tagihan',
      'data' => Pasien::all(),
    ]);
  }

  public function show($id)
  {
    return view('tagihan.detail', [
      'title' => 'Tagihan',
      'data' => Pasien::find($id),
    ]);
  }
}
