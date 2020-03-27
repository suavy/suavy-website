<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name_fr')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

            $table->timestamps();
        });

        $this->seed();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    public function seed()
    {
        \App\Models\City::create([
            'name_fr' => 'Paris',
            'name_pt' => 'Paris',
            'name_en' => 'Paris',
            'name_es' => 'Paris',
            'country_id' => 1
        ]);
    }
}
