@extends('template')
@section('content')
  <div class="intro-y col-span-12 lg:col-span-6">
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">{{ $title }}</h2>
      </div>
      <div class="p-5">
        <form action="{{ isset($data) ? url('user/' . $data->id) : url('user') }}" method="POST">
          @csrf
          {{ isset($data) ? method_field('PUT') : '' }}
          <div>
            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
              <option>Chris Evans</option>
              <option>Liam Neeson</option>
              <option>Daniel Craig</option>
            </select>
          </div>
          <div>
            <label class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              placeholder="Username"
              name="nip"
              value="{{ isset($data) ? $data->username : '' }}"
            />
          </div>
          <div>
            <label class="form-label">Nama Pegawai</label>
            <input
              type="text"
              class="form-control"
              placeholder="Nama Pegawai"
              name="nama"
              value="{{ isset($data) ? $data->nama : '' }}"
            />
          </div>
          <button class="btn btn-primary mt-5" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection