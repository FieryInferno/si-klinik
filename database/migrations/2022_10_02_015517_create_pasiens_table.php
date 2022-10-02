<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('pasiens', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->foreignId('pegawai_id')->nullable()->constrained('pegawais')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('pasiens');
    }
};
