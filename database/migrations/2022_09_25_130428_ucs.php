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
        Schema::create('Ucs', function (Blueprint $table) {
            $table->id();
            $table->string('SubscriptionId',255);   //Subscription Id
            $table->string('Name',255);             //Nome da UC
            $table->string('DistributorName',50);       //Distribuidora
            $table->string('UC',15);                //Número da UC
            $table->string('TaxModality',5);        //Modalidade Tarifária
            $table->string('BillUser',50);          //Usuário de Coleta de Faturas
            $table->string('BillPassword',50);      //Senha de Coleta de Faturas
            $table->string('RegisterId',15);        //CPF/CNPJ
            $table->string('Address',150);          //Endereço
            $table->string('AddressComplement',50); //Complemento
            $table->string('AddressNumber',50);     //Número
            $table->string('Email',50) ;            //Email
            $table->string('AddressState',2);       //Estado/UF
            $table->string('AddressCity',50);       //Cidade
            $table->string('AddressPostalCode',11); //Código Postal
            $table->string('PdfExemploConta',11);   //Conta de exmplo da unidade consumidora para caldulo de percentual a ser atribuido


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
        Schema::dropIfExists('Ucs');
    }
};

