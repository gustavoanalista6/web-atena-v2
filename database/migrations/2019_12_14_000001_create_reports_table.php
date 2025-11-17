<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
    */
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('report', 255); // report VARCHAR(255)
            $table->timestamp('created_at')->nullable(); // created_at TIMESTAMP
            $table->timestamp('updated_at')->nullable(); // updated_at TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
}
