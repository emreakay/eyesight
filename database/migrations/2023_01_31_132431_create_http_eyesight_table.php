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
        Schema::create('http_eyesight', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->boolean('ssl');
            $table->boolean('domain_expire');
            $table->unsignedInteger('timeout')->default(10);
            $table->unsignedInteger('lh_performance')->nullable();
            $table->unsignedInteger('lh_accessibility')->nullable();
            $table->unsignedInteger('lh_best_practices')->nullable();
            $table->unsignedInteger('lh_seo')->nullable();
            $table->unsignedInteger('lh_pwa')->nullable();
            $table->unsignedInteger('interval_in_sec');
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
        Schema::dropIfExists('http_eyesight');
    }
};
