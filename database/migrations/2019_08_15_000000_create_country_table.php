<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name_fr')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->string('flag_image')->nullable();
            $table->string('code',2)->nullable();
            $table->decimal('map_marker_position_top', 5,2);
            $table->decimal('map_marker_position_left', 5,2);
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
        \App\Models\Country::create([
            'name_fr' => 'France',
            'name_pt' => 'França',
            'name_en' => 'France',
            'name_es' => 'Francia',
            'code' => 'FR',
            'flag_image' => 'images/flags/fr.svg',
            'map_marker_position_top' => 47.2,
            'map_marker_position_left' => 47.6
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Portugal',
            'name_pt' => 'Portugal',
            'name_en' => 'Portugal',
            'name_es' => 'Portugal',
            'flag_image' => 'images/flags/pt.svg',
            'code' => 'PT',
            'map_marker_position_top' => 52,
            'map_marker_position_left' => 44.3
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Brésil',
            'name_pt' => 'Brasil',
            'name_en' => 'Brazil',
            'name_es' => 'Brasil',
            'code' => 'BR',
            'flag_image' => 'images/flags/br.svg',
            'map_marker_position_top' => 79.3,
            'map_marker_position_left' => 35
        ]);

    }
}
