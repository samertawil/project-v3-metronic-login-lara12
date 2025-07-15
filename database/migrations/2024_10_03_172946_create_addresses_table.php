<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_name',50)->nullable();
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->foreignId('neighbourhood_id')->nullable()->constrained('neighbourhoods');
            $table->foreignId('location_id')->nullable()->constrained('locations'); //
            $table->string('address_specific')->nullable(); // باقي العنوان بالتفصيل
            $table->foreignId('address_type')->nullable()->constrained('statuses'); // نوع العنوان , عنوان سكن او عنوان للعمل      
            $table->string('gis')->nullable();
            $table->enum('active',[0,1])->default(1);
            $table->foreignId('user_id')->nullable()->constrained('users');// المستخدم الذي قام بادخال المعلومة
            $table->text('notes')->nullable();
            $table->json('attributes')->nullable();
            $table->timestamps();
           
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
