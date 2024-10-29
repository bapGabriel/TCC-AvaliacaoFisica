<?php

// database/migrations/2024_10_27_000001_create_test_batteries_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestBatteriesTable extends Migration
{
    public function up()
    {
        Schema::create('test_batteries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->year('year');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_batteries');
    }
}
