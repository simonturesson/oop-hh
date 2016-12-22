<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', '255');
            $table->string('origin', '255');
            $table->string('roster', '255');
            $table->string('producer', '255');
            $table->date('roast_date');
            $table->date('brew_date');
            $table->string('price', '255');
            $table->string('store', '255');
            $table->enum('brewmethod', array('Aeropress', 'Chemex', 'V60', 'Kalita', 'General Pour Over', 'Espresso Machine', 'Vitameese brewer'));
            $table->text('notes');
            $table->integer('user_id');
            $table->decimal('rating',6,2);
            $table->string('image', '255');
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
        //
    }
}
