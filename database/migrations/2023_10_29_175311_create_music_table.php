<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist');
            $table->string('genre');
            $table->string('file_path');
            $table->text('image_paths')->nullable();
            $table->unsignedBigInteger('user_id'); // Sử dụng user_id để tham chiếu đến bảng người dùng
            $table->foreign('user_id')->references('id')->on('users'); // Tham chiếu đến trường id trong bảng users
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('music');
    }
}


