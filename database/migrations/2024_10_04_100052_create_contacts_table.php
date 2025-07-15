<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_type')->constrained('statuses')->comment('نوع جهة الاتصال : شركة , فرد وغيره');
            $table->foreignId('identity_number')->nullable()->constrained('statuses')->comment('الرقم الوطني: ممكن ان يكون رقم هوبة بحالة الافراد او رقم مشتغل مرخص بحالة الشركات وغيره');
            $table->string('full_name'); 
            $table->string('nick_name')->nullable();
            $table->string('fname')->nullable();  
            $table->string('sname')->nullable();
            $table->string('tname')->nullable();
            $table->string('lname')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('responsible')->nullable()->comment('الشخص المسؤل في حال الشركات');
            $table->foreignId('address_id')->nullable()->constrained('addresses');
            $table->string('short_description')->nullable(); 
            $table->string('description')->nullable(); //done
            $table->string('phone_primary')->nullable();
            $table->string('phone_secondary')->nullable();
            $table->string('work_phone_primary')->nullable();
            $table->string('work_phone_secondary')->nullable();
            $table->boolean('isFavorite')->default(0);
            $table->json('properties')->nullable();
            $table->json('attchments')->nullable(); 
            $table->text('note')->nullable(); //done
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
