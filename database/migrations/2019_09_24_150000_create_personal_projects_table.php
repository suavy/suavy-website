<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\PersonalProject;

class CreatePersonalProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('personal_projects'); // todo remove this
        Schema::create('personal_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description_fr')->nullable();
            $table->text('description_pt')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_es')->nullable();
            $table->string('color')->nullable();
            $table->string('color_light')->nullable();
            $table->string('source_link', 500)->nullable();
            $table->string('website_link', 500)->nullable();
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
        Schema::dropIfExists('personal_projects');
    }

    public function seed()
    {


        PersonalProject::create([
            'slug' => 'my-online-resume',
            'name' => 'My Online Resume',
            'color' => '#1e3799',
            'color_light' => hex2rgba('#1e3799', 0.2),
            'started_at' => \Carbon\Carbon::create(2019, 8, 15),
            'ended_at' => null,
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
            'source_link' => 'https://github.com/cdo9/my-online-resume',
            'website_link' => '',
        ]);

        PersonalProject::create([
            'slug' => 'live-statistics',
            'name' => 'Live Statistics',
            'color' => '#1e3799',
            'color_light' => hex2rgba('#1e3799', 0.2),
            'started_at' => \Carbon\Carbon::create(2015, 10, 1),
            'ended_at' => null,
            'description_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description_pt' => '',
            'description_en' => '',
            'description_es' => '',
            'source_link' => 'https://github.com/cdo9/live-statistics',
            'website_link' => 'https://live-statistics.com/',

        ]);
    }
}
