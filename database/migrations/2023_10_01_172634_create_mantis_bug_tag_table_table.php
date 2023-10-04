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
        Schema::create('mantis_bug_tag_table', function (Blueprint $table) {
            $table->unsignedInteger('bug_id')->default(0);
            $table->unsignedInteger('tag_id')->default(0)->index('idx_bug_tag_tag_id');
            $table->unsignedInteger('user_id')->default(0);
            $table->unsignedInteger('date_attached')->default(1);

            $table->primary(['bug_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantis_bug_tag_table');
    }
};
