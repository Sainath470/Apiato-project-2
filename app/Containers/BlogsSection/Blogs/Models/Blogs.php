<?php

namespace App\Containers\BlogsSection\Blogs\Models;

use App\Ship\Parents\Models\Model;

class Blogs extends Model
{

    protected $table = "blogs";

    protected $fillable = [
     'admin_id', 'hotelName','foodName','description', 'price','rating','place'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Blogs';
}
