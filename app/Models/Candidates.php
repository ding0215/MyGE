<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidates extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='candidates';
    protected $primaryKey = 'Candidate_id';
    protected $fillable = [
        'Candidate_name',
        'Constituency_id',
        'Party_id',
        'Candidate_background',
    ];

}
