<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('tindakan_pasiens', function (Blueprint $table) {
      $table->id();
      $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade')->onUpdate('cascade');
      $table->foreignId('tindakan_id')->constrained('tindakans')->onDelete('cascade')->onUpdate('cascade');
      $table->integer('jumlah');
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
        Schema::dropIfExists('tindakan_pasiens');
    }
};
