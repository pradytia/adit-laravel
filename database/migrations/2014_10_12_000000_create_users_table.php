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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('role');
            $table->timestamps();
        });

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'adit',
            'email' => 'adit@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('123'),
            'remember_token' => Str::random(60),
            'role' => 'user'
        ],
        [
            'id' => 2,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
            'role' => 'admin'
        ]
    );

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
}
