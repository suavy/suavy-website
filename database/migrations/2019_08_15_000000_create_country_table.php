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
            $table->string('code', 2)->nullable();
            $table->decimal('map_marker_position_top', 5, 2)->nullable();
            $table->decimal('map_marker_position_left', 5, 2)->nullable();
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
            'map_marker_position_top' => 47.2,
            'map_marker_position_left' => 47.6
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Portugal',
            'name_pt' => 'Portugal',
            'name_en' => 'Portugal',
            'name_es' => 'Portugal',
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
            'map_marker_position_top' => 79.3,
            'map_marker_position_left' => 35
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Belgique',
            'name_pt' => 'Bélgica',
            'name_en' => 'Belgium',
            'name_es' => 'Bélgica',
            'code' => 'BE',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Espagne',
            'name_pt' => 'Espanha',
            'name_en' => 'Spain',
            'name_es' => 'España',
            'code' => 'ES',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Canada',
            'name_pt' => 'Canadá',
            'name_en' => 'Canada',
            'name_es' => 'Canadá',
            'code' => 'CA',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Suisse',
            'name_pt' => 'Suíça',
            'name_en' => 'Swiss',
            'name_es' => 'Suiza',
            'code' => 'CH',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Allemagne',
            'name_pt' => 'Alemanha',
            'name_en' => 'Germany',
            'name_es' => 'Alemania',
            'code' => 'DE',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Danemark',
            'name_pt' => 'Dinamarca',
            'name_en' => 'Dinamarca',
            'name_es' => 'Denmark',
            'code' => 'DK',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Grèce',
            'name_pt' => 'Grécia',
            'name_en' => 'Greece',
            'name_es' => 'Grecia',
            'code' => 'GR',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Inde',
            'name_pt' => 'Índia',
            'name_en' => 'India',
            'name_es' => 'India',
            'code' => 'IN',
        ]);

        \App\Models\Country::create([
            'name_fr' => 'Italie',
            'name_pt' => 'Itália',
            'name_en' => 'Italy',
            'name_es' => 'Italia',
            'code' => 'IT',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Suède',
            'name_pt' => 'Suécia',
            'name_en' => 'Sweden',
            'name_es' => 'Suecia',
            'code' => 'SE',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'Royaume-Uni',
            'name_pt' => 'Reino Unido',
            'name_en' => 'United Kingdom',
            'name_es' => 'Reino Unido',
            'code' => 'UK',
        ]);
        \App\Models\Country::create([
            'name_fr' => 'États-Unis',
            'name_pt' => 'Estados Unidos',
            'name_en' => 'United States',
            'name_es' => 'Estados Unidos',
            'code' => 'US',
        ]);

    }
}
