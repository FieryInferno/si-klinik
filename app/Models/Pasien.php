<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  use HasFactory;
  protected $fillable = ['nama', 'pegawai_id', 'status'];

  public function pegawai()
  {
    return $this->hasOne(Pegawai::class, 'id', 'pegawai_id');
  }

  public function tindakan()
  {
    return $this->hasMany(TindakanPasien::class);
  }

  public function obat()
  {
    return $this->hasMany(ObatPasien::class);
  }
}
