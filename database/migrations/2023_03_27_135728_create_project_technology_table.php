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
        Schema::create('project_technology', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            // Aggiungi FK da project
            $table->unsignedBigInteger('project_id'); 
            // Rendi la colonna foreign key
            $table->foreign('project_id')
            ->references('id')
            ->on('projects')
            ->onUpdate('cascade')
            ->onDelete('cascade');



            // Aggiungi FK da technology
            $table->unsignedBigInteger('technology_id'); 
            // Rendi la colonna foreign key
            $table->foreign('technology_id')
            ->references('id')
            ->on('technologies')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            // Aggiungi identificativo della pivot table (associazione tra project_id e technology_id)
            $table->primary(['project_id', 'technology_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
