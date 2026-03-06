<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'service_title',
        'service_category',
        'price_type',
        'base_price',
        'discount_price',
        'available_days',
        'location_type',
        'city',
        'state',
        'zip_code',
        'address',
        'highlight',
        'service',
        'other_service',
        'faq',
        'description',
        'gallery'
    ];

    protected $casts = [
        'available_days' => 'array',
        'highlight' => 'array',
        'service' => 'array',
        'faq' => 'array',
        'gallery' => 'array'
    ];
}
