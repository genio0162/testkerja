<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('nomor_induk')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->date('tanggal_bergabung');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    // User::create([
    //     'nomor_induk' => 'GP20010',
    //     'name' => 'Raisa',
    //     'email' => 'raisa@gmail.com',
    //     'password'=> bcrypt('12345'),
    //     'alamat' => 'Jln Kelapa Sawit, Jakarta Selatan',
    //     'tanggal_lahir' => '1990-12-17',
    //     'tanggal_bergabung' => '2008-08-16'
    // ])

    // Cuti::create([
    //     'user_id' => 3,
    //     'nomor_induk' => 'GP20003',
    //     'tanggal_cuti' => '2020-09-30',
    //     'lama_cuti' => 1,
    //     'keterangan' => 'Acara Keluarga'
    // ])

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
