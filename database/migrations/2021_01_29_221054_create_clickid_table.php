<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClickidTable extends Migration
{
    public function up()
    {
        Schema::create('clickid', function (Blueprint $table) {
            $table->string('clickid', 40)->default(1)->primary();
            $table->string('event', 40)->nullable();
            $table->string('type', 40)->nullable();
            $table->string('app_id', 100)->nullable();
            $table->boolean('sell')->nullable();
            $table->boolean('reg')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clickid');
    }
}
