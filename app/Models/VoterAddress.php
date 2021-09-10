<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VoterAddress extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table='voter_addresses';
    protected $primaryKey = 'V_address_id';
    protected $fillable = [
        'Voter_id',
        'Address',
        'City',
        'Zip_Code',
        'State',
        'Country',
    ];
}
