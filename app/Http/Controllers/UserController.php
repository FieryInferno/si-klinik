<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
      'pegawai' => Pegawai::select('pegawais.id', 'pegawais.nama')->leftJoin('users', 'pegawais.id', '=', 'users.pegawai_id')->whereNull('users.pegawai_id')->get(),
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'pegawai_id' => 'required',
      'username' => 'required',
      'password' => 'required',
      'level' => 'required',
    ]);

    $user = new User;
    $user->pegawai_id = $request->pegawai_id;
    $user->username = $request->username;
    $user->password = Hash::make($request->password);
    $user->level = $request->level;

    $user->save();
    return redirect('user')->with('success', 'Berhasil tambah user');
  }

  public function edit(User $user)
  {
    return view('user.form', [
      'title' => 'User',
      'data' => $user,
      'pegawai' => Pegawai::all(),
    ]);
  }

  public function update(Request $request, User $user)
  {
    $request->validate([
      'pegawai_id' => 'required',
      'username' => 'required',
      'level' => 'required',
    ]);

    $user->pegawai_id = $request->pegawai_id;
    $user->username = $request->username;

    if ($request->password) {
      $user->password = Hash::make($request->password);
    }

    $user->level = $request->level;

    $user->save();
    return redirect('user')->with('success', 'Berhasil edit user');
  }

  public function destroy(User $user)
  {
    $user->delete();
    return redirect('user')->with('success', 'Berhasil hapus user');
  }
}
