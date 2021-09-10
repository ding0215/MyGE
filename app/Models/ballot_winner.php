<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ballot_winner extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='ballot_winners';
    protected $primaryKey = 'B_winner_id';
    protected $fillable = [
        'Ballot_id',
        'Winner_Candidate_id',
        'Winner_party_id',
        'Total_vote_received',
        'Vote_received_percentage',
    ];
}
