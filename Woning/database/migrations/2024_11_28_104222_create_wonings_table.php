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
        Schema::create('woning', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titel');
            $table->string('Oppervlakte');
            $table->decimal('PrijsPerWeek', 8, 2);
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
        Schema::dropIfExists('wonings');
    }
};