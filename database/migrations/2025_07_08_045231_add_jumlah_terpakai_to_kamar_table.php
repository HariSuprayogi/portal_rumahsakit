<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('kamar', function (Blueprint $table) {
        $table->integer('jumlah_kamar')->default(0)->after('nama_kamar');
        $table->integer('terpakai')->default(0)->after('jumlah_kamar');
    });
}

public function down()
{
    Schema::table('kamar', function (Blueprint $table) {
        $table->dropColumn(['jumlah_kamar', 'terpakai']);
    });
}

};
