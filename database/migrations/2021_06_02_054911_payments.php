<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_pelanggan');
            $table->integer('id_fixer')
                ->reference('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('jenis_device');
            $table->timestamps();
            $table->foreign('id_pelanggan')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
