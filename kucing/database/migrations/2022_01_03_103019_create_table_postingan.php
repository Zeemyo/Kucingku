<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostingan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->integer('id_Category')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->string('description', 1000)->default(null);;
            $table->string('image', 200);
            $table->timestamps();
        });
        Schema::table('postingan', function(Blueprint $table){
            $table->foreign('id_Category')->references('id')->on('Category')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('postingan', function(Blueprint $table){
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::table('postingan', function(Blueprint $table){
            $table->dropForeign('postingan_id_Category_foreign');
        });
        Schema::table('postingan', function(Blueprint $table){
            $table->dropForeign('postingan_id_user_foreign');
        });
        Schema::dropIfExists('postingan');
    }
}
