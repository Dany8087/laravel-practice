<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('subCategoryTitle');
            $table->string('subCategorySubtitle');
            $table->string('subCategoryDescription');
            $table->string('subcategoryImg');
            $table->string('blogDetails');
            $table->string('Facebook');
            $table->string('Twitter');
            $table->string('Instagram');
            $table->string('Linkedin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
};
