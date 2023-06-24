<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('dosen_id');
            $table->string('judul');
            $table->string('info');
            $table->string('status');
            $table->string('jenis')->comment('PDF');
            $table->string('pertanyaan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->dateTime('tugas_start')->comment('waktu mulai tugas');
            $table->dateTime('tugas_end')->comment('waktu berakhir tugas');
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
        Schema::dropIfExists('tugas_pelajarans');
    }
}
