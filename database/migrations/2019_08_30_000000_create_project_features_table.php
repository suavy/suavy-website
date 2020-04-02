<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Project;

class CreateProjectFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name_fr')->nullable();
            $table->text('name_pt')->nullable();
            $table->text('name_en')->nullable();
            $table->text('name_es')->nullable();
            $table->smallInteger('order');

            $table->foreignId('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

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
        $project = Project::query()->whereSlug('remplafrance')->first();

        \App\Models\ProjectFeature::query()->insert([
            [
                'project_id'=>$project->id,
                'order'=>1,
                'name_fr'=>"Annonces médicales avec : 10 types d’annonces, 60 spécialités, 4 types de comptes donc 60x10x4 possibilités de formulaires de création",
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'order'=>2,
                'name_fr'=>"Contrats de travail 100% dématérialisés avec signature éléctronique et transmission à l’ordre des médecins",
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'order'=>3,
                'name_fr'=>"Recherche ultra rapide via Algolia parmis des dizaines de milliers d'annonces avec un affichage des résultats sur une map",
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'order'=>5,
                'name_fr'=>"Paiement rapide, simple et sécurisé avec Stripe",
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'order'=>4,
                'name_fr'=>"Envois de SMS à un pool de candidat pour des remplacements disponible",
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
        ]);
    }

}
