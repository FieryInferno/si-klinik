<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
  public function index()
  {
    return view('pegawai.index', [
      'title' => 'Pegawai',
      'data' => Pegawai::all(),
    ]);
  }

  public function create()
  {
    return view('pegawai.form', ['title' => 'Pegawai']);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nip' => 'required',
      'nama' => 'required',
    ]);
    Pegawai::create($request->all());
    return redirect('pegawai')->with('success', 'Berhasil tambah pegawai');
  }

  public function edit(Pegawai $pegawai)
  {
    return view('pegawai.form', [
      'title' => 'Pegawai',
      'data' => $pegawai,
    ]);
  }

  public function update(Request $request, Pegawai $pegawai)
  {
    $request->validate([
      'nip' => 'required',
      'nama' => 'required',
    ]);
    $pegawai->update($request->all());
    return redirect('pegawai')->with('success', 'Berhasil edit pegawai');
  }

  public function destroy(Pegawai $pegawai)
  {
    $pegawai->delete();
    return redirect('pegawai')->with('success', 'Berhasil hapus pegawai');
  }
}
