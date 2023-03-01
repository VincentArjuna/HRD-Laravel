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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')
                ->nullable()
                ->default(null)
                ->constrained('menus', 'id')
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('url')
                ->nullable()
                ->default('#');
            $table->string('icon')
                ->nullable()
                ->default('HomeIcon');
            $table->unsignedTinyInteger('position');
            $table->boolean('enable')->default(true);
            $table->boolean('deleteable')->default(true);
            $table->longText('actives')
                ->nullable()
                ->default(null);
            $table->string('permission_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
