<?php

namespace App\Http\Controllers;

use App\Models\Tindakan;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
  public function index()
  {
    return view('tindakan.index', [
      'title' => 'Tindakan',
      'data' => Tindakan::all(),
    ]);
  }

  public function create()
  {
    return view('tindakan.form', ['title' => 'Tindakan']);
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required',
      'harga' => 'required',
    ]);
    Tindakan::create($request->all());
    return redirect('tindakan')->with('success', 'Berhasil tambah tindakan');
  }

  public function edit(Tindakan $tindakan)
  {
    return view('tindakan.form', [
      'title' => 'Tindakan',
      'data' => $tindakan,
    ]);
  }

  public function update(Request $request, Tindakan $tindakan)
  {
    $request->validate([
      'nama' => 'required',
      'harga' => 'required',
    ]);
    $tindakan->update($request->all());
    return redirect('tindakan')->with('success', 'Berhasil edit tindakan');
  }

  public function destroy(Tindakan $tindakan)
  {
    $tindakan->delete();
    return redirect('tindakan')->with('success', 'Berhasil hapus tindakan');
  }
}
