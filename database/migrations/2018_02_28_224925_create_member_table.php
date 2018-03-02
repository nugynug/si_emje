<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_member', 20);
            $table->string('nama', 50);
            $table->string('dom_ktp', 25);
            $table->string('tlp', 15);
            $table->string('perusahaan', 50);
            $table->string('j_perusahaan', 20);
            $table->string('posisi_kerja', 20);
            $table->string('dom_perusahaan', 25);
            $table->string('no_rekening', 50);
            $table->string('perusahaan', 25);
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
        Schema::dropIfExists('member');
    }
}
