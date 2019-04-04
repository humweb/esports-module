<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * User: ryun
 * Date: 2019-04-02
 * Time: 22:54
 */
class CreateEsportsTables extends Migration
{
    public function up()
    {

        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('model');
            $table->string('collection_name');
            $table->string('name');
            $table->string('file_name');
            $table->string('mime_type')->nullable();
            $table->string('disk');
            $table->unsignedInteger('size');
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->unsignedInteger('order_column')->nullable();
            $table->nullableTimestamps();
        });

        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->timestamps();
        });
        Schema::create('maps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id');
            $table->string('name')->index();
            $table->timestamps();
            //Games (id, name, shortName,image, banner)
            //Maps  (id, name,image,gameID)
        });
    }
}