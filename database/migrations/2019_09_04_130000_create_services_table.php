<?php

use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            //reorder
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft')->default(0);
            $table->integer('rgt')->default(0);
            $table->integer('depth')->default(0);

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

    public function seed()
    {
        Service::create([
            'color' => 'blue',
            'icon' => 'fad fa-fw fa-sort-alpha-up-alt',
            'name_fr' => 'Développement de votre site', 'name_pt' => 'Desenvolvimento do seu site', 'name_en' => 'Development of your site', 'name_es' => '',
        ]);
        Service::create([
            'color' => 'pink',
            'icon' => 'fad fa-fw fa-pencil-alt',
            'name_fr' => 'Design', 'name_pt' => 'Design', 'name_en' => 'Design', 'name_es' => 'Design',
        ]);
        Service::create([
            'color' => 'orange',
            'icon' => 'fad fa-fw fa-sort-alpha-up-alt',
            'name_fr' => 'Data', 'name_pt' => 'Cat 3', 'name_en' => 'Cat 3', 'name_es' => '',
        ]);
        Service::create([
            'color' => 'purple',
            'icon' => 'fad fa-fw fa-sort-alpha-up-alt',
            'name_fr' => 'Blabla', 'name_pt' => 'Cat 4', 'name_en' => 'Cat 4', 'name_es' => '',
        ]);

        Service::create([
            'color' => '',
            'icon' => 'fad fa-fw fa-sort-alpha-up-alt',
            'name_fr' => 'Todo', 'name_pt' => 'Cat 5', 'name_en' => 'Cat 5', 'name_es' => '',
        ]);

        /* Cat 1 */
        Service::create([
            'icon' => 'fad fa-fw fa-construction',
            'name_fr' => 'Création ou refonte de votre projet', 'name_pt' => 'Criação ou redesenho do seu projeto', 'name_en' => 'Creation or redesign of your project', 'name_es' => '',
            'parent_id' => 1,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-exchange',
            'name_fr' => "Développement d'API", 'name_pt' => 'Desenvolvimento de API', 'name_en' => 'API development', 'name_es' => '',
            'parent_id' => 1,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-coin',
            'name_fr' => 'Système de paiement (Stripe, Paypal)', 'name_pt' => 'Integração de sistemas de pagamento (Stripe, Paypal)', 'name_en' => 'Payment system integration (Stripe, Paypal)', 'name_es' => '',
            'parent_id' => 1,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-search',
            'name_fr' => 'Recherche rapide (Algolia, Elasticsearch)', 'name_pt' => 'Pesquisa rápida (Algolia, Elasticsearch)', 'name_en' => 'Rapid search (Algolia, Elasticsearch)', 'name_es' => '',
            'parent_id' => 1,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-map-marked-alt',
            'name_fr' => 'Cartographie (Google Maps, Mapbox)',
            'name_pt' => 'Mapping (Google Maps, Mapbox)', 'name_en' => 'Mapping (Google Maps, Mapbox)', 'name_es' => '',
            'parent_id' => 1,
        ]);

        /* Cat 2 */
        Service::create([
            'icon' => 'fad fa-fw fa-drafting-compass',
            'name_fr' => 'UX/UI Design', 'name_pt' => 'UX/UI Design', 'name_en' => 'UX/UI Design', 'name_es' => '',
            'parent_id' => 2,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-copyright',
            'name_fr' => 'Branding', 'name_pt' => 'Branding', 'name_en' => 'Branding', 'name_es' => '',
            'parent_id' => 2,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-paint-roller',
            'name_fr' => 'Intégration front', 'name_pt' => 'Integração front', 'name_en' => 'Front integration', 'name_es' => '',
            'parent_id' => 2,
        ]);

        /* Cat 3 */
        Service::create([
            'icon' => 'fad fa-fw fa-chart-network',
            'name_fr' => 'Track your audience', 'name_pt' => 'Acompanhe seu público', 'name_en' => 'Track your audience', 'name_es' => '',
            'parent_id' => 3,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-database',
            'name_fr' => 'Gestion/optimisation de base de données', 'name_pt' => 'Gestão/otimização de base de dados', 'name_en' => 'Database management/optimization', 'name_es' => '',
            'parent_id' => 3,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-analytics',
            'name_fr' => 'Data Analyse', 'name_pt' => 'Data analysis', 'name_en' => 'Data analysis', 'name_es' => '',
            'parent_id' => 3,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-vials',
            'name_fr' => 'A/B testing', 'name_pt' => 'A/B testing', 'name_en' => 'A/B testing', 'name_es' => '',
            'parent_id' => 3,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-wrench',
            'name_fr' => 'Stratégie Data (Marketing data-driven & CRM)', 'name_pt' => 'Data strategy (Marketing data-driven & CRM)', 'name_en' => 'Data strategy (Marketing data-driven & CRM)', 'name_es' => '',
            'parent_id' => 3,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-layer-group',
            'name_fr' => 'Déploiement de cas d’usages', 'name_pt' => 'Deployment of use cases', 'name_en' => 'Deployment of use cases', 'name_es' => '',
            'parent_id' => 3,
        ]);

        /* Cat 4 */
        Service::create([
            'icon' => 'fad fa-fw fa-eye',
            'name_fr' => 'Accompagnement SEO', 'name_pt' => 'Suporte SEO', 'name_en' => 'SEO support', 'name_es' => '',
            'parent_id' => 4,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-bug',
            'name_fr' => 'Focus sur des problématiques marketing', 'name_pt' => 'Foco em soluções de marketing', 'name_en' => 'Focus on Marketing issues',
            'name_es' => '',
            'parent_id' => 4,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-bullhorn',
            'name_fr' => 'Communication', 'name_pt' => 'Communication', 'name_en' => 'Communication', 'name_es' => '',
            'parent_id' => 4,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-comments',
            'name_fr' => 'Marketing digital & réseaux sociaux', 'name_pt' => 'Digital & social media marketing', 'name_en' => 'Digital & social media marketing', 'name_es' => '',
            'parent_id' => 4,
        ]);

        /* Cat 5 */
        Service::create([
            'icon' => 'fad fa-fw fa-mobile-alt',
            'name_fr' => 'Développement mobile iOS/Androïd', 'name_pt' => 'Desenvolvimento mobile iOS/Androïd', 'name_en' => 'Mobile development iOS/Androïd', 'name_es' => '',
            'parent_id' => 5,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-robot',
            'name_fr' => 'Automatisation des tâches', 'name_pt' => 'Automação de tarefas', 'name_en' => 'Tasks automation', 'name_es' => '',
            'parent_id' => 5,
        ]);
        Service::create([
            'icon' => 'fad fa-fw fa-server',
            'name_fr' => 'Gestion de serveur', 'name_pt' => 'Gestão de servidor', 'name_en' => 'Server management', 'name_es' => '',
            'parent_id' => 5,
        ]);
    }
}
