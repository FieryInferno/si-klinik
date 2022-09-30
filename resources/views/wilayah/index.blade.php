@extends('template')
@section('content')
  <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">{{ $title }}</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <button class="btn btn-primary shadow-md mr-2">Tambah</button>
    </div>
  </div>
  <div class="intro-y box p-5 mt-5">
    <div class="overflow-x-auto">
      <table class="table">
        <thead>
          <tr>
            <th class="whitespace-nowrap">#</th>
            <th class="whitespace-nowrap">Nama Wilayah</th>
            <th class="whitespace-nowrap">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="whitespace-nowrap">1</td>
            <td class="whitespace-nowrap">Angelina</td>
            <td class="whitespace-nowrap">Jolie</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection