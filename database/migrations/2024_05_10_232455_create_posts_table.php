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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Shorthand for increments('id')
            $table->timestamps();
            $table->string('titre', 80);
            $table->text('contenu');
            $table->foreignId('user_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            // You can use the 'constrained' method instead of separate 'foreign' and 'references' calls
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
