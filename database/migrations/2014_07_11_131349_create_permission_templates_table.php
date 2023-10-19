<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('permission_templates', function (Blueprint $table) {
            // PRIMARY
            $table->increments('id');

            // FOREIGN
            $table->unsignedTinyInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')
                ->onDelete('cascade');

            // ADDITIONAL
            $table->string('action', 100);
            $table->string('description', 250)->nullable();
            $table->boolean('access')->default(0);

            // TIME
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permission_templates');
    }
}
