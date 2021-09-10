<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallotResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ballot_results', function (Blueprint $table) {
            $table->id('B_result_id');
            $table->Integer('Ballot_id');
            $table->Integer('Ballot_Candidate_id');
            $table->Integer('Candidate_party_id');
            $table->Integer('Total_vote_received');
            $table->Integer('Vote_received_percentage');
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
        Schema::dropIfExists('ballot_results');
    }
}
