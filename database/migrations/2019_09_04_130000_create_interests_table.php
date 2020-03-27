<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Interest;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('interests'); // todo remove this
        Schema::create('interests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_fr')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('interests');
    }

    public function seed() {
        Interest::create([
            'icon' => "fad fa-fw fa-laptop",
            'name_fr' => "Informatique",
            'name_pt' => "Informática",
            'name_en' => "Computer science",
            'name_es' => "",
            'color' => "",
        ]);

        Interest::create([
            'icon' => "fad fa-fw fa-cauldron",
            'name_fr' => "Cuisine",
            'name_pt' => "Cozinhar",
            'name_en' => "Cooking",
            'name_es' => "",
            'color' => "",
        ]);
        Interest::create([
            'icon' => "fad fa-fw fa-skating",
            'name_fr' => "Roller",
            'name_pt' => "Roller",
            'name_en' => "Roller",
            'name_es' => "",
            'color' => "",
        ]);
        Interest::create([
            'icon' => "fad fa-fw fa-tree-alt",
            'name_fr' => "Nature",
            'name_pt' => "Natureza",
            'name_en' => "Nature",
            'name_es' => "",
            'color' => "",
        ]);
    }
}
