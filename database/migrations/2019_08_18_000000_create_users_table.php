<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('picture')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('disabled')->default(false);
            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

    public function seed()
    {
        $user = new \App\Models\User();
        $user->firstname = 'Matthieu';
        $user->lastname = 'Kassian';
        $user->email = 'kassian.matthieu@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();

        $user = new \App\Models\User();
        $user->firstname = 'Christophe';
        $user->lastname = 'Do Outeiro';
        $user->email = 'cdo_outeiro@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();

        $user = new \App\Models\User();
        $user->firstname = 'Matheus';
        $user->lastname = ' ';
        $user->email = 'matheus@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 3;
        $user->country_id = 2;
        $user->save();

        $user = new \App\Models\User();
        $user->firstname = 'Breno';
        $user->lastname = ' ';
        $user->email = 'breno@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->save();

        $user = new \App\Models\User();
        $user->firstname = 'Elisa';
        $user->lastname = 'Nogueira';
        $user->email = 'elisa@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();

        $user = new \App\Models\User();
        $user->firstname = 'Yago';
        $user->lastname = ' ';
        $user->email = 'yago@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->save();

    }
}
