<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConstituencyType extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='constituency_types';
    protected $primaryKey = 'Ctype_id';
    protected $fillable = [
        'Ctype_name',
    ];
}
