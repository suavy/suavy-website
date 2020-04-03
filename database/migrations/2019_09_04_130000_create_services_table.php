<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\Service;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('services'); // todo remove this
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_fr')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->string('color')->nullable();
            $table->string('icon')->nullable();

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
        Schema::dropIfExists('services');
    }

    public function seed() {
        Service::create([
            'icon' => "fad fa-fw fa-sort-alpha-up-alt",
            'name_fr' => "Développement de votre site de A à Z",
            'name_pt' => "Desenvolvimento do seu site de A a Z",
            'name_en' => "Development of your site from A to Z",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-coin",
            'name_fr' => "Intégration système de paiement (Stripe, Paypal)",
            'name_pt' => "Integração de sistemas de pagamento (Stripe, Paypal)",
            'name_en' => "Payment system integration (Stripe, Paypal)",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-exchange",
            'name_fr' => "Développement d'API",
            'name_pt' => "Desenvolvimento de API",
            'name_en' => "API development",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-database",
            'name_fr' => "Gestion/optimisation de base de données",
            'name_pt' => "Gestão/otimização de base de dados",
            'name_en' => "Database management/optimization",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-eye",
            'name_fr' => "Accompagnement SEO",
            'name_pt' => "Suporte SEO",
            'name_en' => "SEO support",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-construction",
            'name_fr' => "Création ou refonte de votre projet",
            'name_pt' => "Criação ou redesenho do seu projeto",
            'name_en' => "Creation or redesign of your project",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-mobile-alt",
            'name_fr' => "Développement mobile iOS/Androïd",
            'name_pt' => "Desenvolvimento mobile iOS/Androïd",
            'name_en' => "Mobile development iOS/Androïd",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-paint-roller",
            'name_fr' => "Intégration front",
            'name_pt' => "Integração front",
            'name_en' => "Front integration",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-drafting-compass",
            'name_fr' => "UX/UI Design",
            'name_pt' => "UX/UI Design",
            'name_en' => "UX/UI Design",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-robot",
            'name_fr' => "Automatisation des tâches",
            'name_pt' => "Automação de tarefas",
            'name_en' => "Tasks automation",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-server",
            'name_fr' => "Gestion de serveur",
            'name_pt' => "Gestão de servidor",
            'name_en' => "Server management",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-chart-network",
            'name_fr' => "Track your audience",
            'name_pt' => "Acompanhe seu público",
            'name_en' => "Track your audience",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-search",
            'name_fr' => "Recherche rapide (Algolia, Elasticsearch)",
            'name_pt' => "Pesquisa rápida (Algolia, Elasticsearch)",
            'name_en' => "Rapid search (Algolia, Elasticsearch)",
            'name_es' => "",
        ]);
        Service::create([
            'icon' => "fad fa-fw fa-map-marked-alt",
            'name_fr' => "Cartographie (Google Maps, Mapbox)",
            'name_pt' => "Mapping (Google Maps, Mapbox)",
            'name_en' => "Mapping (Google Maps, Mapbox)",
            'name_es' => "",
        ]);
    }
}
