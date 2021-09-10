<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class States extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='states';
    protected $primaryKey = 'State_id';
    protected $fillable = [
        'State_id',
        'State_name',
    ];
}
