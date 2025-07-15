<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_name',25)->unique()->after('name');
            $table->string('mobile',15)->after('email_verified_at');
            $table->enum('user_type', ['user', 'employee', 'admin', 'superadmin'])->default('user')->after('email_verified_at');
            $table->enum('user_activation', [0, 1])->default(1)->after('email_verified_at');
            $table->integer('status_id')->nullable()->after('remember_token');
            $table->integer('need_to_change')->default(0)->after('remember_token');
            $table->string('created_by')->nullable()->before('created_at');

        });
    }

 
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_name');
            $table->dropColumn('mobile');
            $table->dropColumn('user_type');
            $table->dropColumn('user_activation');
            $table->dropColumn('status_id');
            $table->dropColumn('need_to_change');
            $table->dropColumn('created_by');
        });
    }
};
