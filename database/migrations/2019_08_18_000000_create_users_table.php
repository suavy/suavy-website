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
            $table->boolean('admin')->default(false);
            $table->foreignId('address_id');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
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
        $user->address()->associate(1);
        $user->save();

        $user = new \App\Models\User();
        $user->firstname = 'Christophe';
        $user->lastname = 'Do Outeiro';
        $user->email = 'cdo_outeiro@me.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('test');
        $user->created_at = $user->updated_at = \Carbon\Carbon::now();
        $user->admin = 1;
        $user->address()->associate(2);
        $user->save();

    }
}
