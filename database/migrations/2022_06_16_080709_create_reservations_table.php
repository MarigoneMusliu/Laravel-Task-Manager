<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string("HotelName_umhr");
            $table->string("VisitorName_umhr");
            $table->string("RoomType_umhr");
            $table->string("RegisteredDate");
            $table->string("LeavingDate");
        });
    }
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};