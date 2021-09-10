<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='votes';
    protected $primaryKey = 'Vote_id';
    protected $fillable = [
        'Ballot_id',
        'Chosen_Candidate_id',
        'Chosen_Party_id',
    ];
}
