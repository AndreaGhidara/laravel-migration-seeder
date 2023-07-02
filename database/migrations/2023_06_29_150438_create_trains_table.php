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
        Schema::create('trains', function (Blueprint $table) {
            //inserire sempre il numero di caratteri per la stringa.
            $table->id();
            $table->string('company', 80)->nullable();
            $table->string('arrival_station', 120)->nullable();
            $table->string('departur_station', 120)->nullable();
            
            $table->date('departure_time')->nullable();
            $table->date('arrival_time')->nullable();

            $table->string('train_code')->nullable();
            $table->integer('train_carraiges_number')->nullable();

            $table->boolean('on_time')->nullable();
            $table->boolean('train_cancelled')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
