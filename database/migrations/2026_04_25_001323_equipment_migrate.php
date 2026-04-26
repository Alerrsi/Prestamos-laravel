<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Type\TrueType;

return new class extends Migration 
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("equipments", function (Blueprint $table ){
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("serial_number")->unique();
            $table->boolean("status")->default(True);
            $table->foreignId("category_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
