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
            $table->bigIncrements('id');
            $table->string('User');
            $table->string('List');
            $table->string('Item');
            $table->string('Statement');
            $table->timestamps();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Pseudo');
            $table->string('Mail');
            $table->string('Password');
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
