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
        Schema::table('banner', function (Blueprint $table) {
            $table->dropColumn('sub_text');
            $table->dropColumn('main_text');
            $table->string('text_link')->nullable();
            $table->string('link2')->nullable();
            $table->string('text_link2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner', function (Blueprint $table) {
            $table->string('sub_text')->nullable();
            $table->string('main_text')->nullable();
            $table->dropColumn('text_link');
            $table->dropColumn('link2');
            $table->dropColumn('text_link2');
        });
    }
};
