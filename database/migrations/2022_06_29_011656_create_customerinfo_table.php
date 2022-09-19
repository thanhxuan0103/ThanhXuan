<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $timestamps = false;

    public function up()
    {
        Schema::create('customerinfo', function (Blueprint $table) {
            $table->id('idCustomer');
            $table->string('CustomerName');
            $table->string('CustomerPhone')->unique();
            $table->string('OrgName');
            $table->string('CustomerMail')->nullable()->unique();
            $table->string('MiddlemanName')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customerinfo');
    }
}
