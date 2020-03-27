<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Skill;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('skills'); // todo remove this
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('color')->nullable();
            $table->string('color_light')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('skills');
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
        Schema::dropIfExists('skills');
    }

    public function seed() {
        // Colors : https://github.com/ozh/github-colors/blob/master/colors.json
        Skill::create(['slug' => 'html', 'name' => 'HTML', 'color' => '#c23616', 'color_light' => hex2rgba('#c23616', 0.2), 'parent_id' => null]);
        $skillHtml = Skill::where('slug', 'html')->first();
        Skill::create(['slug' => 'blade', 'name' => 'Blade', 'color' => '', 'parent_id' => $skillHtml->id]);

        Skill::create(['slug' => 'css', 'name' => 'CSS', 'color' => '#6D214F', 'color_light' => hex2rgba('#6D214F', 0.2), 'parent_id' => null]);
        $skillCss = Skill::where('slug', 'css')->first();
        Skill::create(['slug' => 'sass', 'name' => 'SASS', 'color' => '', 'parent_id' => $skillCss->id]);
        Skill::create(['slug' => 'responsive', 'name' => 'Responsive', 'color' => '', 'parent_id' => $skillCss->id]);
        Skill::create(['slug' => 'mobile-first', 'name' => 'Mobile first', 'color' => '', 'parent_id' => $skillCss->id]);
        Skill::create(['slug' => 'bem', 'name' => 'BEM Notation', 'color' => '', 'parent_id' => $skillCss->id]);

        Skill::create(['slug' => 'php', 'name' => 'PHP', 'color' => '#4F5D95', 'color_light' => hex2rgba('#4F5D95', 0.2), 'parent_id' => null]);
        $skillPhp = Skill::where('slug', 'php')->first();
        Skill::create(['slug' => 'laravel', 'name' => 'Laravel', 'color' => '', 'parent_id' => $skillPhp->id]);
        Skill::create(['slug' => 'symfony', 'name' => 'Symfony', 'color' => '', 'parent_id' => $skillPhp->id]);
        Skill::create(['slug' => 'yii', 'name' => 'Yii', 'color' => '', 'parent_id' => $skillPhp->id]);
        Skill::create(['slug' => 'zend', 'name' => 'Zend', 'color' => '', 'parent_id' => $skillPhp->id]);


        Skill::create(['slug' => 'sql', 'name' => 'SQL', 'color' => '#718093', 'color_light' => hex2rgba('#718093', 0.2), 'parent_id' => null]);
        $skillSql = Skill::where('slug', 'sql')->first();
        Skill::create(['slug' => 'mysql', 'name' => 'MySQL', 'color' => '', 'parent_id' => $skillSql->id]);
        Skill::create(['slug' => 'data-optimization', 'name' => 'Data optimization', 'color' => '', 'parent_id' => $skillSql->id]);
        Skill::create(['slug' => 'data-analysis', 'name' => 'Data analysis', 'color' => '', 'parent_id' => $skillSql->id]);



        Skill::create(['slug' => 'js', 'name' => 'JavaScript', 'color' => '#d1a11e', 'color_light' => hex2rgba('#e1b12c', 0.2), 'parent_id' => null]);
        $skillJs = Skill::where('slug', 'js')->first();
        Skill::create(['slug' => 'react', 'name' => 'React.js', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'redux', 'name' => 'Redux', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'react-native', 'name' => 'React Native', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'vue', 'name' => 'Vue.js', 'color' => '', 'parent_id' => $skillJs->id]);
        Skill::create(['slug' => 'jquery', 'name' => 'jQuery', 'color' => '', 'parent_id' => $skillJs->id]);

        Skill::create(['slug' => 'design', 'name' => 'Design', 'color' => '#B33771', 'color_light' => hex2rgba('#B33771', 0.2), 'parent_id' => null]);
        $skillDesign = Skill::where('slug', 'design')->first();
        Skill::create(['slug' => 'ui-ux', 'name' => 'UI/UX', 'color' => '', 'parent_id' => $skillDesign->id]);

        Skill::create(['slug' => 'seo', 'name' => 'SEO', 'color' => '#3498db', 'color_light' => hex2rgba('#3498db', 0.2), 'parent_id' => null]);

        Skill::create(['slug' => 'linux', 'name' => 'Linux', 'color' => '#20C20E', 'color_light' => hex2rgba('#20C20E', 0.2), 'parent_id' => null]);
        $skillLinux = Skill::where('slug', 'linux')->first();
        Skill::create(['slug' => 'git', 'name' => 'GIT', 'color' => '', 'parent_id' => $skillLinux->id]);
        Skill::create(['slug' => 'homestead', 'name' => 'Homestead', 'color' => '',  'parent_id' => $skillLinux->id]);
        Skill::create(['slug' => 'deployment', 'name' => 'Deployment', 'color' => '', 'parent_id' => $skillLinux->id]);


    }
}
