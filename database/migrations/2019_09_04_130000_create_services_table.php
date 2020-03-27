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
            'name_fr' => "Développement de votre site (de A à Z)",
            'name_pt' => "Desenvolvimento do seu site (de A a Z)",
            'name_en' => "Development of your site (from A to Z)",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Intégration système de paiement (Stripe, Paypal)",
            'name_pt' => "Integração de sistema de pagamento (Stripe, Paypal)",
            'name_en' => "Payment system integration (Stripe, Paypal)",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Développement d'API",
            'name_pt' => "Desenvolvimento de API",
            'name_en' => "API development",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Gestion/optimisation de bases de données",
            'name_pt' => "Gestão/otimização de base de dados",
            'name_en' => "Database management/optimization",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Accompagnement SEO",
            'name_pt' => "Suporte em SEO",
            'name_en' => "SEO support",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Accompagnement dans la création ou la refonte de votre projet",
            'name_pt' => "Acompanhamento na criação ou redesenho do seu projeto",
            'name_en' => "Accompaniment in the creation or redesign of your project",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Accompagnement UI/UX",
            'name_pt' => "Suporte UI/UX",
            'name_en' => "UI/UX support",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Développement mobile iOS/Androïd",
            'name_pt' => "Desenvolvimento móvel iOS/Androïd",
            'name_en' => "Mobile development iOS/Androïd",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Intégration front",
            'name_pt' => "Integração front",
            'name_en' => "Front integration",
            'name_es' => "",
        ]);
        Service::create([
            'name_fr' => "Conception de design",
            'name_pt' => "",
            'name_en' => "",
            'name_es' => "",
        ]);


        /*
            • Développement PHP (de préférence avec le Framework Laravel)
            • Développement Front (Intégration, design, ui/ux, responsive)
            • Développement d'API et gestion d'API externes
            • Accompagnement dans la création ou la refonte de votre projet
            • Accompagnement SEO
            •
            • Intégration système de paiement (Stripe, Paypal)
            • Développement mobile iOS/Androïd avec React Native __[Niveau Junior]__
         */
    }
}
