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
        Schema::create('mantis_bug_table', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id')->default(0)->index('idx_project');
            $table->unsignedInteger('reporter_id')->default(0);
            $table->unsignedInteger('handler_id')->default(0);
            $table->unsignedInteger('duplicate_id')->default(0);
            $table->smallInteger('priority')->default(30);
            $table->smallInteger('severity')->default(50);
            $table->smallInteger('reproducibility')->default(10);
            $table->smallInteger('status')->default(10)->index('idx_bug_status');
            $table->smallInteger('resolution')->default(10);
            $table->smallInteger('projection')->default(10);
            $table->smallInteger('eta')->default(10);
            $table->unsignedInteger('bug_text_id')->default(0);
            $table->string('os', 32)->default('');
            $table->string('os_build', 32)->default('');
            $table->string('platform', 32)->default('');
            $table->string('version', 64)->default('');
            $table->string('fixed_in_version', 64)->default('')->index('idx_bug_fixed_in_version');
            $table->string('build', 32)->default('');
            $table->unsignedInteger('profile_id')->default(0);
            $table->smallInteger('view_state')->default(10);
            $table->string('summary', 128)->default('');
            $table->integer('sponsorship_total')->default(0)->index('idx_bug_sponsorship_total');
            $table->tinyInteger('sticky')->default(0);
            $table->string('target_version', 64)->default('');
            $table->unsignedInteger('category_id')->default(1);
            $table->unsignedInteger('date_submitted')->default(1);
            $table->unsignedInteger('due_date')->default(1);
            $table->unsignedInteger('last_updated')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantis_bug_table');
    }
};
