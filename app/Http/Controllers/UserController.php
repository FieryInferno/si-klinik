<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('user.index', [
      'title' => 'User',
      'data' => User::all(),
    ]);
  }

  public function create()
  {
    return view('user.form', [
      'title' => 'User',
      'pegawai' => Pegawai::leftJoin('users', 'pegawais.id', '=', 'users.pegawai_id')->whereNull('users.pegawai_id')->get(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate(['nama' => 'required']);
    User::create($request->all());
    return redirect('user')->with('success', 'Berhasil tambah user');
  }

  public function edit(User $user)
  {
    return view('user.form', [
      'title' => 'User',
      'data' => $user,
    ]);
  }

  public function update(Request $request, User $user)
  {
    $request->validate(['nama' => 'required']);
    $user->update($request->all());
    return redirect('user')->with('success', 'Berhasil edit user');
  }

  public function destroy(User $user)
  {
    $user->delete();
    return redirect('user')->with('success', 'Berhasil hapus user');
  }
}
