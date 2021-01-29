<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClickidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clickid', function (Blueprint $table) {
            $table->id();
            $table->string('clickid', 40)->default(1);
            $table->string('event', 40)->nullable();
            $table->string('type', 40)->nullable();
            $table->string('app_id', 100)->nullable();
            $table->boolean('sell')->nullable();
            $table->boolean('reg')->nullable();
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
        Schema::dropIfExists('clickid');
    }
}
