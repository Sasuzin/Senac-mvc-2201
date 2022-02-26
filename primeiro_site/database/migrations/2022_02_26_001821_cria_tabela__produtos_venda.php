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
        Schema::create('ProdutosVenda', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('venda_id')->unsigned();
            $table->BigInteger('produto_id')->unsigned();
            $table->intereger('quantidade');
            $table->double('valor',12,2);
            $table->timestamps();
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProdutosVenda');
    }
};
