<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Project;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('projects'); // todo remove this
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description_fr')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->string('area')->nullable();
            $table->string('color')->nullable();
            $table->string('color_light')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();

            //reorder
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft')->default(0);
            $table->integer('rgt')->default(0);
            $table->integer('depth')->default(0);

            //$table->string('color')->nullable();
            //$table->boolean('senior')->nullable(); // todo add to seed
            //$table->unsignedBigInteger('parent_id')->nullable();
            //$table->foreign('parent_id')->references('id')->on('skills');
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
        Schema::dropIfExists('projects');
    }

    public function seed()
    {
        Project::create([
            'slug' => 'remplafrance',
            'name' => 'RemplaFrance',
            //'position_fr' => 'Développeur Web Fullstack Senior',
            'area' => 'Neuilly-sur-Seine',
            'color' => '#1e3799',
            'color_light' => hex2rgba('#1e3799', 0.2),
            'started_at' => \Carbon\Carbon::create(2017, 9, 1),
            'ended_at' => null,
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);

        Project::create([
            'slug' => 'victor-charles',
            'name' => 'Victor & Charles',
            //'position_fr' => 'Développeur Web Fullstack',
            'area' => 'Paris',
            'color' => '#1dabe3',
            'color_light' => hex2rgba('#1dabe3', 0.2),
            'started_at' => \Carbon\Carbon::create(2015, 10, 1),
            'ended_at' => \Carbon\Carbon::create(2018, 12, 31),
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);



        Project::create([
            'slug' => 'nolim-bd',
            'name' => 'NolimBD (Carrefour)',
            //'position_fr' => 'Développeur Web Fullstack',
            'area' => 'Paris',
            'color' => '#045499',
            'color_light' => hex2rgba('#045499', 0.2),
            'started_at' => \Carbon\Carbon::create(2016, 9, 1),
            'ended_at' => \Carbon\Carbon::create(2017, 4, 1),
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);

        Project::create([
            'slug' => 'lookaya',
            'name' => 'Lookaya',
            //'position_fr' => 'Développeur Web Fullstack',
            'area' => 'Neuilly-sur-Seine',
            'color' => '#146ccb',
            'color_light' => hex2rgba('#146ccb', 0.2),
            'started_at' => \Carbon\Carbon::create(2015, 9, 1),
            'ended_at' => \Carbon\Carbon::create(2016, 9, 1),
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);

        Project::create([
            'slug' => 'bdbuzz',
            'name' => 'bdBuzz',
            //'position_fr' => 'Développeur Web Front',
            'area' => 'Neuilly-sur-Seine',
            'color' => '#e1b12c',
            'color_light' => hex2rgba('#e1b12c', 0.2),
            'started_at' => \Carbon\Carbon::create(2014, 4, 1),
            'ended_at' => \Carbon\Carbon::create(2016, 6, 1),
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
        ]);

    }
}
