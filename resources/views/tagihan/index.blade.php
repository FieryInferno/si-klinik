@extends('template')
@section('content')
  <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">{{ $title }}</h2>
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
            <th class="whitespace-nowrap">Nama Pasien</th>
            <th class="whitespace-nowrap">Dokter</th>
            <th class="whitespace-nowrap">Tindakan</th>
            <th class="whitespace-nowrap">Obat</th>
            <th class="whitespace-nowrap">Status</th>
            <th class="whitespace-nowrap">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          @foreach ($data as $dataTable)
            <tr>
              <td class="whitespace-nowrap">{{ $no++ }}</td>
              <td class="whitespace-nowrap">{{ $dataTable->nama }}</td>
              <td class="whitespace-nowrap">{{ $dataTable->pegawai->nama }}</td>
              <td class="whitespace-nowrap">
                <ul>
                  @foreach ($dataTable->tindakan as $tindakan)
                    <li>{{ $tindakan->tindakan->nama }}</li>
                  @endforeach
                </ul>
              </td>
              <td class="whitespace-nowrap">
                <ul>
                  @foreach ($dataTable->obat as $obat)
                    <li>{{ $obat->obat->nama }}</li>
                  @endforeach
                </ul>
              </td>
              <td class="whitespace-nowrap">{{ $dataTable->status }}</td>
              <td class="whitespace-nowrap">
                <a href="{{ url('tagihan/' . $dataTable->id) }}" class="btn btn-success">Ubah Status</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection