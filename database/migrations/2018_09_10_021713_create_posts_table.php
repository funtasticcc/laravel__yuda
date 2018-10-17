<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('tpp');
            $table->string('tahun');
            $table->string('bulan');
            $table->string('jumlah');
            $table->string('hadir');
            $table->string('izin');
            $table->string('sakit');
            $table->string('cuti');
            $table->string('alasan');
            $table->string('terlambat');
            $table->string('pulang');
            $table->string('uwas');
            $table->string('upacara');
            $table->string('wirid');
            $table->string('apel');
            $table->string('senam');
            $table->string('skp');
            $table->string('pelayanan');
            $table->string('integritas');
            $table->string('komitmen');
            $table->string('disiplin');
            $table->string('kerjasama');
            $table->string('kepemimpinan');
            $table->string('lkh');
            $table->string('sop');
            $table->string('title');
            $table->text('content');
            $table->unsignedInteger('jabatan_id');
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
        Schema::dropIfExists('posts');
    }
}
