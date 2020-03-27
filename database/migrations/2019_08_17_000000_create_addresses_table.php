<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->json('address');
            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        \App\Models\Address::create([
            'address'=>["value"=>"75019 Paris, France","latlng"=>["lat"=>48.880188,"lng"=>2.381550],"street_number"=>null,"route"=>null,"locality"=>"Paris","administrative_area_level_2"=>"Arrondissement de Paris","administrative_area_level_1"=>"Ile-de-France","country"=>"France","postal_code"=>"75019"],
            'city_id' => 1,
            'country_id' => 1,
        ]);
        \App\Models\Address::create([
            'address'=>["value"=>"75009 Paris, France","latlng"=>["lat"=>48.878565,"lng"=>2.337359],"street_number"=>null,"route"=>null,"locality"=>"Paris","administrative_area_level_2"=>"Arrondissement de Paris","administrative_area_level_1"=>"Ile-de-France","country"=>"France","postal_code"=>"75009"],
            'city_id' => 1,
            'country_id' => 1,
        ]);
    }
}
