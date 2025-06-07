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
        Schema::table('users', function (Blueprint $table) {
            // $table->string('email')->unique()->after('name'); // إضافة حقل email مع تعيينه ليكون فريد
            $table->text('bio')->nullable()->change();  // جعل الحقل قابلاً لأن يكون فارغًا
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email'); // إلغاء الحقل في الرجوع
            $table->text('bio')->nullable(false)->change();  // العودة إلى الحقل غير القابل لأن يكون فارغًا
        });
    }
    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
};
