<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedulings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('service_id');
            $table->dateTime('data');
            $table->time('hour');
            $table->time('duration');
            $table->decimal('value', 10, 2);
            $table->decimal('commission', 10, 2)->default(0.00);
            $table->tinyInteger('paidcomission')->default(0);
            $table->dateTime('comissionpaiddate')->nullable();
            $table->timestamps();

            // criando as fk's
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('professional_id')->references('id')->on('professionals');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedulings', function(Blueprint $table){
            $table->dropForeign('schedulings_company_id_foreign');
            $table->dropForeign('schedulings_user_id_foreign');
            $table->dropForeign('schedulings_professional_id_foreign');
            $table->dropForeign('schedulings_service_id_foreign');
        });
    }
}
