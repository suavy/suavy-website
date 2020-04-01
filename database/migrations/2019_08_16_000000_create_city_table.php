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

        \App\Models\City::create([
            'name_fr' => 'Rio de Janeiro',
            'name_pt' => 'Rio de Janeiro',
            'name_en' => 'Rio de Janeiro',
            'name_es' => 'Rio de Janeiro',
            'country_id' => 3
        ]);

        \App\Models\City::create([
            'name_fr' => 'Porto',
            'name_pt' => 'Porto',
            'name_en' => 'Porto',
            'name_es' => 'Porto',
            'country_id' => 2
        ]);

    }
}
