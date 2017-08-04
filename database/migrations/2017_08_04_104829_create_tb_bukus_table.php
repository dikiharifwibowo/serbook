<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->text('cover');
            $table->text('img');
            $table->string('judul',100);
            $table->string('slug_judul',100);
            $table->text('isi');
            $table->enum('status', ['waiting', 'revision','acc']);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('tb_categories')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bukus');
    }
}
