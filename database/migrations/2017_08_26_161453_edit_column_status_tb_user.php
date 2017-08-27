<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class EditColumnStatusTbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_bukus', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('tb_bukus', function (Blueprint $table) {
            $table->enum('status',['on','off']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_bukus', function (Blueprint $table) {
            //
        });
    }
}
