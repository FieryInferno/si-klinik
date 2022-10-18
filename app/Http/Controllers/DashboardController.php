<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pegawai;
use App\Models\Tindakan;
use App\Models\Obat;

class DashboardController extends Controller
{
  public function index()
  {
    $bulan = date('m')-5;
    $namaBulan = [
      'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember',
    ];

    for ($i=$bulan; $i <= date('m'); $i++) {
      $dataGrafik[$namaBulan[$i - 1]] = Pasien::whereMonth('created_at', $i)->whereYear('created_at', 2022)->count();
    }

    return view('dashboard', [
      'title' => 'Dashboard',
      'dataGrafik' => $dataGrafik,
      'pegawai' => Pegawai::count(),
      'tindakan' => Tindakan::count(),
      'obat' => Obat::count(),
      'pasien' => Pasien::count(),
    ]);
  }
}
