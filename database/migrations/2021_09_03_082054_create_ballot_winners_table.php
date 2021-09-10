<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallotWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ballot_winners', function (Blueprint $table) {
            $table->id('B_winner_id');
            $table->Integer('Ballot_id');
            $table->Integer('Winner_Candidate_id');
            $table->Integer('Winner_party_id');
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
        Schema::dropIfExists('ballot_winners');
    }
}
