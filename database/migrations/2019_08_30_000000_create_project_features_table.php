<?php

use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            //reorder
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft')->default(0);
            $table->integer('rgt')->default(0);
            $table->integer('depth')->default(0);

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
                'name_fr'=>'Annonces médicales avec : 10 types d’annonces, 60 spécialités, 4 types de comptes donc 60x10x4 possibilités de formulaires de création',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'name_fr'=>'Contrats de travail 100% dématérialisés avec signature éléctronique et transmission à l’ordre des médecins',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'name_fr'=>"Recherche d'annonces (+10.000) en quelques ms avec Algolia et affichage sur une map Mabox",
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'name_fr'=>'Paiement sécurisé avec Stripe',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
            [
                'project_id'=>$project->id,
                'name_fr'=>'Recrutement de remplaçants par SMS',
                'created_at' => \Carbon\Carbon::now()->toDateTime(),
                'updated_at' => \Carbon\Carbon::now()->toDateTime(),
            ],
        ]);
    }
}
