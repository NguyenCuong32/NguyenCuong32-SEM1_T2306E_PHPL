<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void      // hàm dùng để thêm bớt thay đổi 
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentname');
            $table->integer('studentage');
            $table->integer('birthday');
            $table->string('address');
            $table->timestamps();   // xóa cột nhập giá trị
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void    //hàm dùng để phục hồi hoặc xóa bảng 
    {
        Schema::dropIfExists('students');
    }
};
