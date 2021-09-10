<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ballots_candidate extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='ballots_candidates';
    protected $primaryKey = 'Bc_id';
    protected $fillable = [
        'Candidate_id',
        'Ballot_id',
    ];

}
