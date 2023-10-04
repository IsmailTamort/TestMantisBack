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
        Schema::create('mantis_category_table', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id')->default(0);
            $table->unsignedInteger('user_id')->default(0);
            $table->string('name', 128)->default('');
            $table->unsignedInteger('status')->default(0);

            $table->unique(['project_id', 'name'], 'idx_category_project_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantis_category_table');
    }
};
