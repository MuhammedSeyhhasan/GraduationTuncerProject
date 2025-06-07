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
        Schema::create('teklif_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('product')->nullable();
            $table->text('message');
            $table->timestamps();
        });

        Schema::table('teklif_requests', function (Blueprint $table) {
            $table->string('status')->default('Yeni'); // 'Yeni' أو 'Okundu'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teklif_requests');
        Schema::table('teklif_requests', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
