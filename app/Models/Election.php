<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Election extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='elections';
    protected $primaryKey = 'Election_id';
    protected $fillable = [
        'Election_title',
        'Election_description',
        'Start_date',
        'End_date',
        'Hash',
    ];
}
