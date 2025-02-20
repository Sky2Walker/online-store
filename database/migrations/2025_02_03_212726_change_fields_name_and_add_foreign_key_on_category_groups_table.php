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
        Schema::table('category_groups', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->renameColumn('category_img', 'img');
            $table->renameColumn('onMainMenu', 'is_on_main_menu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
