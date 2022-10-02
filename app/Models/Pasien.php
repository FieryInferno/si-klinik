<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  use HasFactory;
  protected $fillable = ['nama', 'pegawai_id'];

  public function pegawai()
  {
    return $this->hasOne(Pegawai::class, 'id', 'pegawai_id');
  }
}
