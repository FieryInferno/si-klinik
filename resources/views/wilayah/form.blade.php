@extends('template')
@section('content')
  <div class="intro-y col-span-12 lg:col-span-6">
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">{{ $title }}</h2>
      </div>
      <div class="p-5">
        <form action="{{ $data ? url('wilayah/' . $data->id) : url('wilayah') }}" method="POST">
          @csrf
          {{ $data ? method_field('PUT') : '' }}
          <div>
            <label class="form-label">Nama Wilayah</label>
            <input
              type="text"
              class="form-control"
              placeholder="Nama Wilayah"
              name="nama"
              value="{{ $data ? $data->nama : '' }}"
            />
          </div>
          <button class="btn btn-primary mt-5" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection