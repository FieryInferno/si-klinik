<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
  public function index()
  {
    return view('obat.index', [
      'title' => 'Obat',
      'data' => Obat::all(),
    ]);
  }

  public function create()
  {
    return view('obat.form', ['title' => 'Obat']);
  }

  public function store(Request $request)
  {
    $request->validate(['nama' => 'required']);
    Obat::create($request->all());
    return redirect('obat')->with('success', 'Berhasil tambah obat');
  }

  public function edit(Obat $obat)
  {
    return view('obat.form', [
      'title' => 'Obat',
      'data' => $obat,
    ]);
  }

  public function update(Request $request, Obat $obat)
  {
    $request->validate(['nama' => 'required']);
    $obat->update($request->all());
    return redirect('obat')->with('success', 'Berhasil edit obat');
  }

  public function destroy(Obat $obat)
  {
    $obat->delete();
    return redirect('obat')->with('success', 'Berhasil hapus obat');
  }
}
