<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ProductType', 3);
            $table->string('ProductCode', 6);
            $table->string('ProductName', 50);
            $table->decimal('Quantity', 10, 2); 
            $table->string('note', 60)->nullable(); 
            $table->timestamps(); 
        });
    }



   
        public function down(): void
         {
         //
        }
};
