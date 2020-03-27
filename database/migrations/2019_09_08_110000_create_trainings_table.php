<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Training;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('trainings'); // todo remove this
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description_fr')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->string('area')->nullable();
            $table->string('position')->nullable();
            $table->string('color')->nullable();
            $table->boolean('freelance')->default(false);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
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
        Schema::dropIfExists('trainings');
    }

    public function seed()
    {
        Training::create([
            'slug' => 'iut-paris-descartes',
            'name' => 'IUT Paris Descartes',
            'position' => 'Formation informatique',
            'area' => 'Paris, France',
            'color' => '#ce203d',
            'freelance' => false,
            'started_at' => \Carbon\Carbon::create(2012, 9, 1),
            'ended_at' => \Carbon\Carbon::create(2014, 9, 1),
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);


    }
}
