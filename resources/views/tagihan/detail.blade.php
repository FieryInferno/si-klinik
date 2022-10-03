@extends('template')
@section('content')
  <div class="intro-y col-span-12 lg:col-span-6">
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">{{ $title }}</h2>
      </div>
      <div class="p-5">
        <form action="{{ url('pasien/' . $data->id . '/bayar') }}" method="POST">
          @csrf
          <div>
            <label class="form-label">Nama Pasien</label>
            <input
              type="text"
              class="form-control"
              value="{{ $data->nama }}"
              disabled
            />
          </div>
          <div>
            <label class="form-label">Nama Doktor</label>
            <input
              type="text"
              class="form-control"
              value="{{ $data->pegawai->nama }}"
              disabled
            />
          </div>
          <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Tindakan Pasien</h2>
          </div>
          <div class="intro-y box p-5 mt-5">
            <div class="overflow-x-auto">
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">Nama Tindakan</th>
                    <th class="whitespace-nowrap">Jumlah</th>
                    <th class="whitespace-nowrap">Harga Tindakan</th>
                    <th class="whitespace-nowrap">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $totalTagihan = 0;
                  ?>
                  @foreach ($data->tindakan as $dataTable)
                    <?php $totalTagihan += $dataTable->jumlah * $dataTable->tindakan->harga; ?>
                    <tr>
                      <td class="whitespace-nowrap">{{ $no++ }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->tindakan->nama }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->jumlah }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->tindakan->harga }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->jumlah * $dataTable->tindakan->harga }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Obat Pasien</h2>
          </div>
          <div class="intro-y box p-5 mt-5">
            <div class="overflow-x-auto">
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th class="whitespace-nowrap">#</th>
                    <th class="whitespace-nowrap">Nama Obat</th>
                    <th class="whitespace-nowrap">Dosis</th>
                    <th class="whitespace-nowrap">Jumlah</th>
                    <th class="whitespace-nowrap">Harga</th>
                    <th class="whitespace-nowrap">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  @foreach ($data->obat as $dataTable)
                    <?php $totalTagihan += $dataTable->jumlah * $dataTable->obat->harga; ?>
                    <tr>
                      <td class="whitespace-nowrap">{{ $no++ }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->obat->nama }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->dosis1 . ' x ' . $dataTable->dosis2 }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->jumlah }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->obat->harga }}</td>
                      <td class="whitespace-nowrap">{{ $dataTable->jumlah * $dataTable->obat->harga }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div>
            <label class="form-label">Total Tagihan</label>
            <input
              type="text"
              class="form-control"
              value="{{ $totalTagihan }}"
              disabled
            />
          </div>
          <button class="btn btn-primary mt-5" type="submit">Bayar</button>
        </form>
      </div>
    </div>
  </div>
@endsection