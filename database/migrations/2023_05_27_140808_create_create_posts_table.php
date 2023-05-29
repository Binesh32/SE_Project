<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id');
            $table->integer('organization_id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('message');
            $table->string('image');
            $table->string('waste_type');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organizations_admins')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user_admins')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('create_posts');
    }
};
