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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wilayah $wilayah)
    {
        //
    }
}
