<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voters extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='voters';
    protected $primaryKey = 'Voter_id';
    protected $fillable = [
        'Voter_id',
        'Ic',
        'Name',
        'Birthday',
        'Phone_no',
        'Email',
        'Person_id',
    ];
}
