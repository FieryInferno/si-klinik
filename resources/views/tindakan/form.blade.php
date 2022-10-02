@extends('template')
@section('content')
  <div class="intro-y col-span-12 lg:col-span-6">
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">{{ $title }}</h2>
      </div>
      <div class="p-5">
        <form action="{{ isset($data) ? url('tindakan/' . $data->id) : url('tindakan') }}" method="POST">
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
            <label class="form-label">Nama Tindakan</label>
            <input
              type="text"
              class="form-control"
              placeholder="Nama Tindakan"
              name="nama"
              value="{{ isset($data) ? $data->nama : '' }}"
            />
          </div>
          <div>
            <label class="form-label">Harga</label>
            <input
              type="text"
              class="form-control"
              placeholder="Harga"
              name="harga"
              value="{{ isset($data) ? $data->harga : '' }}"
            />
          </div>
          <button class="btn btn-primary mt-5" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection