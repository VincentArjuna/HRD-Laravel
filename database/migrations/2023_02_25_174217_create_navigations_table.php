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
        Schema::create('navigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')
                ->nullable()
                ->default(null)
                ->constrained('navigations', 'id')
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('url')
                ->nullable()
                ->default('#');
            $table->string('icon')
                ->nullable()
                ->default('circle');
            $table->unsignedTinyInteger('position');
            $table->boolean('enable')->default(true);
            $table->boolean('deleteable')->default(true);
            $table->longText('actives')
                ->nullable()
                ->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navigations');
    }
};
