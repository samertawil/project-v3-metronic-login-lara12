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
        Schema::create('setting_systems', function (Blueprint $table) {
            $table->id();
            $table->string('system_name')->unique();
            $table->text('description')->nullable();
            $table->enum('active',[0,1])->default(1);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->date('date1')->nullable();
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
        Schema::dropIfExists('setting_systems');
    }
};
