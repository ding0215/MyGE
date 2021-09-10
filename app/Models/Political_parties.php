<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Political_parties extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='political_parties';
    protected $primaryKey = 'Party_id';
    protected $fillable = [
        'Party_name',
        'Party_background',
        'Abbreviation',
    ];
}
