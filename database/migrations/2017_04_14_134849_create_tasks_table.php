<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Title')->nullable();
            $table->text('Message')->nullable();
            $table->text('Type')->nullable();
            $table->integer('Count2')->nullable();
            $table->text('Update')->nullable();
            $table->text('Title2')->nullable();
            $table->text('Description')->nullable();
            $table->text('ImageUrl')->nullable();
            $table->text('ImageText')->nullable();
            $table->text('Id2')->nullable();
            $table->text('Link2')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
