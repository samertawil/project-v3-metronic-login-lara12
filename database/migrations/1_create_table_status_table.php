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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('p_id')->nullable();
            $table->integer('p_id_sub')->nullable();
            $table->string('status_name')->nullable();
            $table->string('used_in_system_id')->nullable();
            $table->string('route_name')->nullable();
            $table->string('page_name')->nullable();
            $table->string('route_system_name')->nullable();
            $table->boolean('can_delete')->default(1);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_status');
    }
};
