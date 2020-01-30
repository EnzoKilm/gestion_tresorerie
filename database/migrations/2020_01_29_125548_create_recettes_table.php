<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('designation');
            $table->date('date');
            $table->float('amount', 8, 2);
            $table->bigInteger('tva_id')->nullable()->unsigned();
            $table->foreign('tva_id')
                    ->references('id')
                    ->on('tva')
                    ->onDelete('SET NULL');
            $table->float('discount', 10, 2)->nullable();
            $table->enum('discount_type', ['€', '%']);
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
        Schema::dropIfExists('recettes');
    }
}
