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
        Schema::create('http_eyesight_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('http_eyesights_id')->index();
            $table->string('type')->index();
            $table->string('name');
            $table->dateTime('ssl_expire')->nullable();
            $table->dateTime('domain_expire')->nullable();
            $table->bigInteger('response_time_in_ms')->nullable();
            $table->unsignedInteger('lh_performance')->nullable();
            $table->unsignedInteger('lh_accessibility')->nullable();
            $table->unsignedInteger('lh_best_practices')->nullable();
            $table->unsignedInteger('lh_seo')->nullable();
            $table->unsignedInteger('lh_pwa')->nullable();
            $table->json('payload');
            $table->json('alert')->nullable();
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
        Schema::dropIfExists('eyesight_records');
    }
};
