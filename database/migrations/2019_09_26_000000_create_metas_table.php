<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\Metas\Delivery::createMetaTable('deliveries');
        $this->seedContactDeliveries();

        \App\Models\Metas\Budget::createMetaTable('budgets');
        $this->seedContactBudget();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('open_source_projects');
    }

    public function seedContactDeliveries()
    {
        \App\Models\Metas\Delivery::query()->create([
            'name_fr'=> '< 1 mois',
            'name_pt'=> '< 1 mês',
            'name_en'=> '< 1 month',
            'name_es'=> '< 1 mes',
        ]);

        \App\Models\Metas\Delivery::query()->create([
            'name_fr'=> '1-3 mois',
            'name_pt'=> '1-3 mês',
            'name_en'=> '1-3 month',
            'name_es'=> '1-3 mes',
        ]);
        \App\Models\Metas\Delivery::query()->create([
            'name_fr'=> '3-6 mois',
            'name_pt'=> '3-6 mês',
            'name_en'=> '3-6 month',
            'name_es'=> '3-6 mes',
        ]);
        \App\Models\Metas\Delivery::query()->create([
            'name_fr'=> '> 6 mois',
            'name_pt'=> '> 6 mês',
            'name_en'=> '> 6 month',
            'name_es'=> '> 6 mes',
        ]);
    }

    public function seedContactBudget()
    {
        \App\Models\Metas\Budget::query()->create([
            'name_fr'=>'< 2000 €',
            'name_pt'=>'< 2000 €',
            'name_en'=>'< 2000 €',
            'name_es'=>'< 2000 €',
        ]);
        \App\Models\Metas\Budget::query()->create([
            'name_fr'=>'2000-4000€',
            'name_pt'=>'2000-4000€',
            'name_en'=>'2000-4000€',
            'name_es'=>'2000-4000€',
        ]);
        \App\Models\Metas\Budget::query()->create([
            'name_fr'=>'4000€-7000€',
            'name_pt'=>'4000€-7000€',
            'name_en'=>'4000€-7000€',
            'name_es'=>'4000€-7000€',
        ]);
        \App\Models\Metas\Budget::query()->create([
            'name_fr'=>'7000€',
            'name_pt'=>'7000€',
            'name_en'=>'7000€',
            'name_es'=>'7000€',
        ]);
    }
}
