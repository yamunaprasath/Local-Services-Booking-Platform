<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePartner extends Model
{
    protected $table = 'service_partner';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'role',
    ];
}
