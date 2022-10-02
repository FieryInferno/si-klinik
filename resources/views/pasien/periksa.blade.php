@extends('template')
@section('content')
  <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Tindakan Pasien</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <button class="btn btn-primary showModal" data-target="addTindakan">Tambah</button>
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
            <th class="whitespace-nowrap">Nama Tindakan</th>
            <th class="whitespace-nowrap">Jumlah</th>
            <th class="whitespace-nowrap">Harga Tindakan</th>
            <th class="whitespace-nowrap">Total Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          @foreach ($data->tindakan as $dataTable)
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
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <button class="btn btn-primary showModal" data-target="addObat">Tambah</button>
    </div>
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
  <div class="modal overflow-y-auto" tabindex="-1" aria-hidden="false" data-tw-backdrop="" id="addTindakan" style="margin-top: 0px; margin-left: 0px; padding-left: 0px; z-index: 10000;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ url('tindakan-pasien/' . $data->id) }}" method="post">
          @csrf
          <input type="hidden" name="pasien_id" value="{{ $data->id }}">
          <div class="modal-body p-10">
            <div>
              <label class="form-label">Tindakan</label>
              <select class="form-select mt-2 sm:mr-2" aria-label="Default select example" name="tindakan_id">
                <option disabled selected>Pilih Tindakan</option>
                @foreach ($tindakan as $t)
                  <option value="{{ $t->id }}">{{ $t->nama }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label class="form-label">Jumlah</label>
              <input
                type="text"
                class="form-control"
                placeholder="Jumlah"
                name="jumlah"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal overflow-y-auto" tabindex="-1" aria-hidden="false" data-tw-backdrop="" id="addObat" style="margin-top: 0px; margin-left: 0px; padding-left: 0px; z-index: 10000;">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ url('obat-pasien/' . $data->id) }}" method="post">
          @csrf
          <input type="hidden" name="pasien_id" value="{{ $data->id }}">
          <div class="modal-body p-10">
            <div>
              <label class="form-label">Obat</label>
              <select class="form-select mt-2 sm:mr-2" aria-label="Default select example" name="obat_id">
                <option disabled selected>Pilih Obat</option>
                @foreach ($obat as $t)
                  <option value="{{ $t->id }}">{{ $t->nama }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label class="form-label">Jumlah</label>
              <input
                type="text"
                class="form-control"
                placeholder="Jumlah"
                name="jumlah"
              />
            <div>
              <label class="form-label">Dosis</label>
              <input
                type="text"
                class="form-control"
                name="dosis1"
              />
              <div>x</div>
              <input
                type="text"
                class="form-control"
                name="dosis2"
              />
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection