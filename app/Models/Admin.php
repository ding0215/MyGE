<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='admins';
    protected $primaryKey = 'Admin_id';
    protected $fillable = [
        'Username',
        'Password',
        'is_active',
    ];
}
