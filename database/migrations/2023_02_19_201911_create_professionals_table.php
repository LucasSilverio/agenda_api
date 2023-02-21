<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('name');
            $table->string('email');
            $table->string('cellphone');
            $table->string('pass');
            $table->string('avatar');
            $table->tinyInteger('level')->default(1);
            $table->tinyInteger('admin')->default(0);
            $table->tinyInteger('financial')->default(0);
            $table->tinyInteger('commissioned')->default(0);
            $table->string('color')->nullable();
            $table->decimal('commissionrate', 10, 2);
            $table->tinyInteger('desativado')->default(0);
            $table->timestamps();

            // criando a fk
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals', function(Blueprint $table){
            $table->dropForeign('professionals_company_id_foreing');
        });
    }
}
