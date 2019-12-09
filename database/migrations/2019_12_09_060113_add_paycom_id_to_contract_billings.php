<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaycomIdToContractBillings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contract_billings', function (Blueprint $table) {
            $table->string('paycom_id')->nullable()->after('manager_phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contract_billings', function (Blueprint $table) {
            $table->dropColumn('paycom_id');
        });
    }
}
