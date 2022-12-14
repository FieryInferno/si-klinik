@extends('template')
@section('content')
  <div class="intro-y col-span-12 lg:col-span-6">
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">{{ $title }}</h2>
      </div>
      <div class="p-5">
        <form action="{{ isset($data) ? url('pasien/' . $data->id) : url('pasien') }}" method="POST">
          @csrf
          {{ isset($data) ? method_field('PUT') : '' }}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div>
            <label class="form-label">Nama Pasien</label>
            <input
              type="text"
              class="form-control"
              placeholder="Nama Pasien"
              name="nama"
              value="{{ isset($data) ? $data->nama : '' }}"
            />
          </div>
          <div>
            <label class="form-label">Dokter</label>
            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example" name="pegawai_id">
              <option disabled selected>Pilih dokter</option>
              @foreach ($pegawai as $p)
                <option value="{{ $p->pegawai_id }}" <?= isset($data) && $data->pegawai_id === $p->pegawai_id ? 'selected' : ''; ?>>{{ $p->pegawai->nama }}</option>
              @endforeach
            </select>
          </div>
          <button class="btn btn-primary mt-5" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection