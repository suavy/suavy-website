<?php

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('project_skill'); // todo remove this
        Schema::create('project_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned()->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->bigInteger('skill_id')->unsigned()->nullable();
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
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
        Schema::dropIfExists('project_skill');
    }

    public function seed()
    {
        // Skills
        $skillLaravel = Skill::where('slug', 'laravel')->first();
        $skillYii = Skill::where('slug', 'yii')->first();
        $skillZend = Skill::where('slug', 'zend')->first();
        $skillHtml = Skill::where('slug', 'html')->first();
        $skillSass = Skill::where('slug', 'sass')->first();
        $skillResponsive = Skill::where('slug', 'responsive')->first();
        $skillSql = Skill::where('slug', 'sql')->first();
        $skillDesign = Skill::where('slug', 'design')->first();
        $skillUiUx = Skill::where('slug', 'ui-ux')->first();
        $skillSeo = Skill::where('slug', 'seo')->first();
        $skillJquery = Skill::where('slug', 'jquery')->first();
        //$ = Skill::where('slug', '')->first();

        // Projects
        $projectRemplafrance = Project::where('slug', 'remplafrance')->first()->skills();
        $projectVictorCharles = Project::where('slug', 'victor-charles')->first()->skills();
        $projectBdbuzz = Project::where('slug', 'bdbuzz')->first()->skills();
        $projectNolimBd = Project::where('slug', 'nolim-bd')->first()->skills();
        $projectLookaya = Project::where('slug', 'lookaya')->first()->skills();

        // Attach to project Remplafrance
        $projectRemplafrance->attach($skillLaravel);
        $projectRemplafrance->attach($skillResponsive);
        $projectRemplafrance->attach($skillSql);
        $projectRemplafrance->attach($skillUiUx);
        $projectRemplafrance->attach($skillSeo);

        // Attach to project Victor & Charles
        $projectVictorCharles->attach($skillLaravel);
        $projectVictorCharles->attach($skillHtml);
        $projectVictorCharles->attach($skillSass);
        $projectVictorCharles->attach($skillJquery);
        $projectVictorCharles->attach($skillSql);

        // Attach to project bdBuzz
        $projectBdbuzz->attach($skillYii);
        $projectBdbuzz->attach($skillHtml);
        $projectBdbuzz->attach($skillSass);
        $projectBdbuzz->attach($skillResponsive);
        $projectBdbuzz->attach($skillJquery);

        // Attach to project NolimBD
        $projectNolimBd->attach($skillYii);
        $projectNolimBd->attach($skillHtml);
        $projectNolimBd->attach($skillSass);
        $projectNolimBd->attach($skillJquery);
        $projectNolimBd->attach($skillSql);

        // Attach to project Lookaya
        $projectLookaya->attach($skillZend);
        $projectLookaya->attach($skillHtml);
        $projectLookaya->attach($skillSass);
        $projectLookaya->attach($skillJquery);
        $projectLookaya->attach($skillSql);
    }
}
