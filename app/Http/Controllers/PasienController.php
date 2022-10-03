<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use App\Models\Tindakan;
use App\Models\TindakanPasien;
use App\Models\Obat;
use App\Models\ObatPasien;
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

    $pasien = new Pasien;
    $pasien->nama = $request->nama;
    $pasien->pegawai_id = $request->pegawai_id;
    $pasien->status = 'waitlist';
    
    $pasien->save();
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

  public function periksa(Pasien $pasien)
  {
    return view('pasien.periksa', [
      'title' => 'Pasien',
      'data' => $pasien,
      'tindakan' => Tindakan::all(),
      'obat' => Obat::all(),
    ]);
  }

  public function tindakanPasien(Request $request, $id)
  {
    $request->validate([
      'jumlah' => 'required',
      'tindakan_id' => 'required',
    ]);
    TindakanPasien::create($request->all());
    return redirect()->back()->with('success', 'Berhasil tambah tindakan pasien');
  }

  public function obatPasien(Request $request, $id)
  {
    $request->validate([
      'obat_id' => 'required',
      'jumlah' => 'required',
      'dosis1' => 'required',
      'dosis2' => 'required',
    ]);
    ObatPasien::create($request->all());
    return redirect()->back()->with('success', 'Berhasil tambah obat pasien');
  }

  public function bayar(Pasien $pasien)
  {
    $pasien->status = 'bayar';

    $pasien->save();
    return redirect('tagihan')->with('success', 'Berhasil ubah pasien');
  }
}
