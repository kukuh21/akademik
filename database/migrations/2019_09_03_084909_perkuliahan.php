<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perkuliahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkuliahan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nim', 9);
            $table->string('Kode_MK', 7);
            $table->string('Nip', 12);
            $table->char('Nilai', 1);
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
        // Schema::drop('perkuliahan');
    }
}
