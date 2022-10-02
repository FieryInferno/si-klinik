<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatPasien extends Model
{
  use HasFactory;
  protected $fillable = ['pasien_id', 'obat_id', 'jumlah', 'dosis1', 'dosis2'];

  public function obat()
  {
    return $this->hasOne(Obat::class, 'id', 'obat_id');
  }
}
