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
        Schema::table('trains', function (Blueprint $table) {
            //inserire sempre il numero di caratteri per la stringa.
            $table->string('company', 80)->nullable();
            $table->string('arrival_station', 120)->nullable();
            $table->string('departur_station', 120)->nullable();
            
            $table->time('departure_time',  $precision = 0)->nullable();
            $table->time('arrival_time', $precision = 0)->nullable();

            $table->integer('train_code')->nullable();
            $table->integer('train_carraiges_number')->nullable();

            $table->boolean('on_time')->nullable();
            $table->boolean('train_cancelled')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn(
                [  
                    "company",
                    "arrival_station",
                    "departur_station",
                    "arrival_time",
                    "train_code",
                    "train_carraiges_number",
                    "on_time",
                    "train_cancelled"
                ]
            );
        });
    }
};
