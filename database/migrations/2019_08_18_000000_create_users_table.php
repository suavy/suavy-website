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
            $table->string('lastname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('role')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('picture')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('disabled')->default(false);

            //reorder
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft')->default(0);
            $table->integer('rgt')->default(0);
            $table->integer('depth')->default(0);

            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_country', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        $user->nickname = 'lemattou';
        $user->role = 'Project Lead & Backend Dev';
        $user->email = 'kassian.matthieu@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Christophe';
        $user->lastname = 'Do Outeiro';
        $user->nickname = 'cdo';
        $user->role = 'Project Lead & Fullstack Dev';
        $user->email = 'cdo_outeiro@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['FR', 'PT', 'UK', 'ES'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Matheus';
        $user->lastname = 'Matheus';
        $user->nickname = 'matheus';
        $user->role = 'Backend Dev';
        $user->email = 'matheus@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 3;
        $user->country_id = 2;
        $user->disabled = true;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['BR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Breno';
        $user->lastname = 'Romeiro';
        $user->nickname = 'bsromeiro';
        $user->role = 'Frontend Dev';
        $user->email = 'bsromeiro@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['BR','FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Elisa';
        $user->lastname = 'Nogueira';
        $user->nickname = 'elisanog';
        $user->role = 'Data Analyst';
        $user->email = 'elisanog05@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['PT', 'FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Yago';
        $user->lastname = 'Lomondo';
        $user->nickname = 'yagolomondo';
        $user->role = 'Tracking Strategy';
        $user->email = 'yagolcs@msn.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['BR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Héloïse';
        $user->lastname = 'Vieu';
        $user->nickname = 'helowwkitty';
        $user->role = 'Com';
        $user->email = 'vieu.heloise@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code',['FR', 'UK'])->get());

    }
}
