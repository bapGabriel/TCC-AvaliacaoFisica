<?php

// database/migrations/2024_10_27_000002_create_tests_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('battery_id')->constrained('test_batteries')->onDelete('cascade');
            $table->float('height'); // in cm
            $table->float('weight'); // in kg
            $table->float('flexibility'); // in cm
            $table->integer('abdominals');
            $table->float('run_6min'); // in meters
            $table->float('medicine_ball'); // in cm
            $table->float('horizontal_jump'); // in cm
            $table->float('square_run', 5, 2); // seconds and hundredths
            $table->float('run_20m', 5, 2); // seconds and hundredths
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
