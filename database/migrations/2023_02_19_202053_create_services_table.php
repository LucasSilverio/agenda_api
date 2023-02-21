<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->bigInteger('professional_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->time('time');
            $table->string('img')->nullable();
            $table->integer('pointsservice')->nullable();
            $table->integer('pointsswap')->nullable();
            $table->tinyInteger('disabled')->default(0);
            $table->timestamps();

            // criando as fk's
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('professional_id')->references('id')->on('professionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services', function(Blueprint $table){
            $table->dropForeign('schedulings_company_id_foreign');
            $table->dropForeign('schedulings_professional_id_foreign');
        });
    }
}
