<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCompanyIdTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->unsignedBigInteger('company_id')
                    ->after('id');
            
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
        Schema::table('users', function(Blueprint $table){
            //remove a fk
            $table->dropForeign('users_company_id_foreign');
            //remove a coluna company_id
            $table->dropColumn('company_id');
        });
    }
}
