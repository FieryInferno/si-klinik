<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
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
    return view('pasien.form', [
      'title' => 'Pasien',
      'pegawai' => User::where('level', '=', 'doctor')->get(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'pegawai_id' => 'required',
    ]);
    Pasien::create($request->all());
    return redirect('pasien')->with('success', 'Berhasil tambah pasien');
  }

  public function edit(Pasien $pasien)
  {
    return view('pasien.form', [
      'title' => 'Pasien',
      'data' => $pasien,
      'pegawai' => User::where('level', '=', 'doctor')->get(),
    ]);
  }

  public function update(Request $request, Pasien $pasien)
  {
    $request->validate([
      'nama' => 'required',
      'pegawai_id' => 'required',
    ]);
    $pasien->update($request->all());
    return redirect('pasien')->with('success', 'Berhasil edit pasien');
  }

  public function destroy(Pasien $pasien)
  {
    $pasien->delete();
    return redirect('pasien')->with('success', 'Berhasil hapus pasien');
  }
}
