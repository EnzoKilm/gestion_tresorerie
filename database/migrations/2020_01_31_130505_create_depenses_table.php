<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('designation');
            $table->date('date');
            $table->float('amount', 8, 2);
            $table->bigInteger('tva_id')->nullable()->unsigned();
            $table->foreign('tva_id')
                    ->references('id')
                    ->on('tva')
                    ->onDelete('SET NULL');
            $table->bigInteger('type_paiement_id')->nullable()->unsigned();
            $table->foreign('type_paiement_id')
                    ->references('id')
                    ->on('type_paiement')
                    ->onDelete('SET NULL');
            $table->float('discount', 10, 2)->nullable();
            $table->enum('discount_type', ['€', '%'])->nullable();
            $table->float('montant_tva', 10, 2)->nullable();
            $table->float('montant_ttc', 10, 2)->nullable();
            $table->float('montant_remise', 10, 2)->nullable();
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
        Schema::dropIfExists('depenses');
    }
}
