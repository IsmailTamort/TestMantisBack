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
        Schema::create('mantis_project_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128)->default('')->unique('idx_project_name');
            $table->smallInteger('status')->default(10);
            $table->tinyInteger('enabled')->default(1);
            $table->smallInteger('view_state')->default(10)->index('idx_project_view');
            $table->smallInteger('access_min')->default(10);
            $table->string('file_path', 250)->default('');
            $table->longText('description');
            $table->unsignedInteger('category_id')->default(1);
            $table->tinyInteger('inherit_global')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantis_project_table');
    }
};
