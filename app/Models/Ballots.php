<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ballots extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='ballots';
    protected $primaryKey = 'Ballot_id';
    protected $fillable = [
        'Ballot_title',
        'Constituency_id',
        'Election_id',
    ];

}
