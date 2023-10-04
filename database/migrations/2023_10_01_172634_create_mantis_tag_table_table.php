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
        Schema::create('mantis_tag_table', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('user_id')->default(0);
            $table->string('name', 100)->default('')->index('idx_tag_name');
            $table->longText('description');
            $table->unsignedInteger('date_created')->default(1);
            $table->unsignedInteger('date_updated')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantis_tag_table');
    }
};
