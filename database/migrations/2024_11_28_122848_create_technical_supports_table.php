<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('technical_supports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_name')->nullable();
            $table->integer('mobile');
            $table->integer('subject_id');
            $table->string('subject');
            $table->text('issue_description');
            $table->integer('status_id')->nullable();
            $table->string('status_name')->nullable();
            $table->text('replay')->nullable();
            $table->date('replay_date')->nullable();
            $table->date('fix_date')->nullable();
            $table->integer('response_employee_id')->nullable();
            $table->string('employee_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_supports');
    }
};
