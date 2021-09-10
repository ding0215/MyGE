<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ballot_result extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='ballot_results';
    protected $primaryKey = 'B_result_id';
    protected $fillable = [
        'Ballot_id',
        'Ballot_Candidate_id',
        'Candidate_party_id',
        'Total_vote_received',
        'Vote_received_percentage',
    ];
}
