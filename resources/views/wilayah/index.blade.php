@extends('template')
@section('content')
  <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">{{ $title }}</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <a class="btn btn-primary shadow-md mr-2" href="{{ url('wilayah/create') }}">Tambah</a>
    </div>
  </div>
  <div class="intro-y box p-5 mt-5">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="overflow-x-auto">
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th class="whitespace-nowrap">#</th>
            <th class="whitespace-nowrap">Nama Wilayah</th>
            <th class="whitespace-nowrap">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          @foreach ($data as $dataTable)
            <tr>
              <td class="whitespace-nowrap">{{ $no++ }}</td>
              <td class="whitespace-nowrap">{{ $dataTable->nama }}</td>
              <td class="whitespace-nowrap">
                <a href="{{ url('wilayah/' . $dataTable->id . '/edit') }}" class="btn btn-success">Edit</a>
                <button class="btn btn-danger showModal" data-target="deleteModal{{ $dataTable->id }}">Hapus</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @foreach ($data as $dataModal)
    <div class="modal overflow-y-auto" tabindex="-1" aria-hidden="false" data-tw-backdrop="" id="deleteModal{{ $dataModal->id }}" style="margin-top: 0px; margin-left: 0px; padding-left: 0px; z-index: 10000;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body p-10 text-center">
            Apakah anda yakin akan menghapus data ini?
            <form action="{{ url('wilayah/' . $dataModal->id) }}" method="post" class="text-right">
              @csrf
              {{ method_field('DELETE') }}
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection