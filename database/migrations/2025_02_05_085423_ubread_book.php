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
        Schema::create('unreadBooks', function (Blueprint $table) {
        $table->id();
        $table->string('book_name');
        $table->string('author');
        $table->text('review');
        $table->string('link');
        $table->text('image');
        $table->string('country');
        $table->string('year');
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
