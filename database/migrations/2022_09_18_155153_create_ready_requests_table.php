<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ready_requests', function (Blueprint $table) {
            $table->id();
            $table->string('userName');
            $table->string('userSurname');
            $table->string('phoneNumber');
            $table->string('square');
            $table->foreignId('ServiceList_id');//выбранный пакет услуг
            $table->string('designStyle');
            $table->date('dateOfStarting');
            $table->string('wishes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ready_requests');
    }
}
