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
            $table->longText('picture')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('disabled')->default(false);
            $table->string('github_url')->nullable();
            $table->string('website_url')->nullable();

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
        $user->role = 'Lead developer';
        $user->email = 'kassian.matthieu@gmail.com';
        $user->github_url = 'https://github.com/lemattou';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Christophe';
        $user->lastname = 'Do Outeiro';
        $user->nickname = 'cdo';
        $user->role = 'Project lead & fullstack developer';
        $user->email = 'cdo_outeiro@me.com';
        $user->website_url = 'https://cdo9.space/';
        $user->github_url = 'https://github.com/cdo9';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['FR', 'PT', 'UK', 'ES'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Breno';
        $user->lastname = 'Romeiro';
        $user->nickname = 'bsromeiro';
        $user->role = 'Frontend developer & designer';
        $user->email = 'bsromeiro@gmail.com';
        $user->website_url = 'https://bsrom.site/';
        $user->github_url = 'https://github.com/obrenoco';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['BR', 'FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Elisa';
        $user->lastname = 'Nogueira';
        $user->nickname = 'elisanog';
        $user->role = 'Data analyst';
        $user->email = 'elisanog05@gmail.com';
        $user->github_url = 'https://github.com/elisanog';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['PT', 'FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Yago';
        $user->lastname = 'Lomondo';
        $user->nickname = 'yagolomondo';
        $user->role = 'Developer';
        $user->email = 'yagolcs@msn.com';
        $user->github_url = 'https://github.com/yagolomondo';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['BR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Héloïse';
        $user->lastname = 'Vieu';
        $user->nickname = 'helolo75';
        $user->role = 'Communication manager';
        $user->email = 'vieu.heloise@gmail.com';
        $user->github_url = 'https://github.com/helolo75';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 1;
        $user->country_id = 1;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['FR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Matheus';
        $user->lastname = 'Matheus';
        $user->nickname = 'matheus';
        $user->role = 'Backend developer';
        $user->email = 'matheus@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 3;
        $user->country_id = 2;
        $user->disabled = true;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['BR', 'UK'])->get());

        $user = new \App\Models\User();
        $user->firstname = 'Pedro';
        $user->lastname = '';
        $user->nickname = 'p-arth';
        $user->role = 'Designer & frontend developer';
        $user->email = 'test@test.fr';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->city_id = 2;
        $user->country_id = 3;
        $user->disabled = true;
        $user->save();
        $user->countries()->sync(\App\Models\Country::query()->whereIn('code', ['BR', 'UK'])->get());
    }
}
