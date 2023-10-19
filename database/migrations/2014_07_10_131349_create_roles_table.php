<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            // PRIMARY
            $table->tinyIncrements('id');

            // ADDITIONAL
            $table->string('name', 100);
            $table->string('alias', 100);
            $table->unsignedTinyInteger('priority')->default(10);

            // TIME
//            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
