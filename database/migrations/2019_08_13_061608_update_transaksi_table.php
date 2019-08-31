<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('transaksis', function (Blueprint $table) {
        $table->string('bukti')->after('harga')->nullable();
        $table->string('status')->after('bukti');
        $table->integer('id_paket')->after('id_user');
        $table->string('admin')->after('id_user')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
