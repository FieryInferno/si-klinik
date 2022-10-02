<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('obat_pasiens', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade')->onUpdate('cascade');
      $table->foreignId('obat_id')->constrained('obats')->onDelete('cascade')->onUpdate('cascade');
      $table->integer('jumlah');
      $table->integer('dosis1');
      $table->integer('dosis2');
      $table->timestamps();
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat_pasiens');
    }
};
