<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
  public function index()
  {
    return view('wilayah.index', [
      'title' => 'Wilayah',
      'data' => Wilayah::all(),
    ]);
  }

  public function create()
  {
    return view('wilayah.form', ['title' => 'Wilayah']);
  }

  public function store(Request $request)
  {
    $request->validate(['nama' => 'required']);
    Wilayah::create($request->all());
    return redirect('wilayah')->with('success', 'Berhasil tambah wilayah');
  }

  public function edit(Wilayah $wilayah)
  {
    return view('wilayah.form', [
      'title' => 'Wilayah',
      'data' => $wilayah,
    ]);
  }

  public function update(Request $request, Wilayah $wilayah)
  {
    $request->validate(['nama' => 'required']);
    $wilayah->update($request->all());
    return redirect('wilayah')->with('success', 'Berhasil edit wilayah');
  }

  public function destroy(Wilayah $wilayah)
  {
    $wilayah->delete();
    return redirect('wilayah')->with('success', 'Berhasil hapus wilayah');
  }
}
