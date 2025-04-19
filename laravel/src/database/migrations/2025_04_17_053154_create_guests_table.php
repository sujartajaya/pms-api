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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->date('TransactionDate');
            $table->time('TransactionTime');
            $table->string('RoomNumber',5);
            $table->integer('GuestID');
            $table->string('GuestName',200);
            $table->string('GuestMaster',1)->default('N');
            $table->string('VIP',1)->default('N');
            $table->string('LanguageCode',3)->default('ENG');
            $table->string('Identify');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
