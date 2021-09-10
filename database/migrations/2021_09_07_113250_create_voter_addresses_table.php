<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoterAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter_addresses', function (Blueprint $table) {
            $table->id('V_address_id');
            $table->Integer('Voter_id');
            $table->String('Address');
            $table->String('City');
            $table->String('Zip_Code');
            $table->String('State');
            $table->String('Country');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voter_addresses');
    }
}
