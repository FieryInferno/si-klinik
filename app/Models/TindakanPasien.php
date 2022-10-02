<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TindakanPasien extends Model
{
  use HasFactory;
  protected $fillable = ['pasien_id', 'tindakan_id', 'jumlah'];

  public function tindakan()
  {
    return $this->hasOne(Tindakan::class, 'id', 'tindakan_id');
  }
}
