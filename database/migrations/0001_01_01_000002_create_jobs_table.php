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

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employer_id');
            $table->string('company_id');
            $table->string('title');
            $table->text('description');
            $table->text('designation');
            $table->string('position');
            $table->string('address');
            $table->integer('status');
            $table->date('last_date');
            $table->softDeletes();
            $table->timestamps();
            
            // Define foreign key constraint
            $table->foreign('employer_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
