<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Constituency extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='constituencies';
    protected $primaryKey = 'Constituency_id';
    protected $fillable = [
        'Constituency_name',
        'Constituency_code',
        'Constituency_type',
        'C_postcode',
        'State',
    ];

}
