<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('tests', function (Blueprint $table) {
        $table->date('test_date')->after('id')->nullable();
    });
}

public function down()
{
    Schema::table('tests', function (Blueprint $table) {
        $table->dropColumn('test_date');
    });
}

};
