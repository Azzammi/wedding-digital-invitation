<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GuestBookTable extends Migration
{
    public function up()
    {
        Schema::create('guest_book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('presence');
            $table->integer('person');
            $table->string('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
