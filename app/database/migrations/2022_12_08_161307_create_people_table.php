<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

require_once 'vendor/autoload.php';
return new class extends Migration
{

    public function up()
    {
        
        Schema::create('people', function (Blueprint $table) {
            $faker = Faker\Factory::create();
            $table->increments('id');
            $table->string($faker->firstName());
            $table->string($faker->lastName());
            $table->unsignedInteger($faker->phoneNumber());
            $table->string($faker->streetAddress());
            $table->string($faker->city());
            $table->string($faker->country());
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
};
