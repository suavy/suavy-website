<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->text('message');
            $table->timestamps();
        });

        Schema::create('contact_delivery', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreignId('delivery_id');
            $table->foreign('delivery_id')->references('id')->on('deliveries')->onDelete('cascade');
        });

        Schema::create('contact_budget', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreignId('budget_id');
            $table->foreign('budget_id')->references('id')->on('budgets')->onDelete('cascade');
        });

        Schema::create('contact_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreignId('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){}

}
