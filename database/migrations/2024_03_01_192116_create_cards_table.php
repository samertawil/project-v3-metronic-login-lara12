<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_title');
            $table->string('card_text');
            $table->json('card_img')->nullable();
            $table->enum('active', [0, 1])->default(1);
            $table->string('card_url')->nullable(1);
            $table->foreignId('status_id')->nullable()->constrained('statuses');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
