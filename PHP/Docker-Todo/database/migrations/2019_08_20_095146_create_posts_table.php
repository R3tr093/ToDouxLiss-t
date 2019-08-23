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
            $table->string('Item2');
            $table->string('Item3');
            $table->string('Item4');
            $table->string('Item5');
            $table->string('Item6');
            $table->string('Item7');
            $table->string('Item8');
            $table->string('Item9');
            $table->string('Item10');
            $table->string('Item11');
            $table->string('Item12');
            $table->string('Item13');
            $table->string('Item14');
            $table->string('Item15');
            $table->string('Share');
            $table->string('Share2');
            $table->string('Share3');
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
