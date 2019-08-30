<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
          $table->String('jenis');
             $table->String('kategori');
              $table->String('nama');
               $table->String('gelardepan');
                $table->String('gelarbelakang');
                 $table->String('tempatlahir'); 
                 $table->String('status'); 
                 $table->String('kebangsaan'); 
                 $table->String('notelp'); 
                 $table->String('email');
                 $table->String('gambar'); 
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
        Schema::dropIfExists('blogs');
    }
}
