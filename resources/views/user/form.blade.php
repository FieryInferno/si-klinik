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
            <label class="form-label">Pegawai</label>
            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example" name="pegawai_id">
              <option disabled selected>Pilih pegawai</option>
              @foreach ($pegawai as $p)
                <option value="{{ $p->id }}">{{ $p->nama }}</option>
              @endforeach
            </select>
          </div>
          <div>
            <label class="form-label">Username</label>
            <input
              type="text"
              class="form-control"
              placeholder="Username"
              name="username"
              value="{{ isset($data) ? $data->username : '' }}"
            />
          </div>
          <div>
            <label class="form-label">Password</label>
            <input
              type="text"
              class="form-control"
              placeholder="Password"
              name="nama"
            />
          </div>
          <button class="btn btn-primary mt-5" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection