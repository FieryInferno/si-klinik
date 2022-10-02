<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
  public function index()
  {
    return view('pasien.index', [
      'title' => 'Pasien',
      'data' => Pasien::all(),
    ]);
  }

  public function create()
  {
    return view('pasien.form', ['title' => 'Pasien']);
  }

  public function store(Request $request)
  {
    $request->validate(['nama' => 'required']);
    Pasien::create($request->all());
    return redirect('pasien')->with('success', 'Berhasil tambah pasien');
  }

  public function edit(Pasien $pasien)
  {
    return view('pasien.form', [
      'title' => 'Pasien',
      'data' => $pasien,
    ]);
  }

  public function update(Request $request, Pasien $pasien)
  {
    $request->validate(['nama' => 'required']);
    $pasien->update($request->all());
    return redirect('pasien')->with('success', 'Berhasil edit pasien');
  }

  public function destroy(Pasien $pasien)
  {
    $pasien->delete();
    return redirect('pasien')->with('success', 'Berhasil hapus pasien');
  }
}
