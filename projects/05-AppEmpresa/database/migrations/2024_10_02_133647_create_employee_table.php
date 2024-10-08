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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name",40);
            $table->string("lastname",40);
            $table->integer("dni")->length(10);
            $table->integer("cuil")->length(12)->nullable();
            $table->string("email")->nullable();
            $table->string("position",100);
            $table->boolean("is_represent");
            $table->unsignedBigInteger("company_id");
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
