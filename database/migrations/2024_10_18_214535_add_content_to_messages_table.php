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
    Schema::table('messages', function (Blueprint $table) {
        if (!Schema::hasColumn('messages', 'content')) {
            $table->string('content'); // Define la columna 'content' como string
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('messages', function (Blueprint $table) {
        $table->dropColumn('content');
    });
}
};
