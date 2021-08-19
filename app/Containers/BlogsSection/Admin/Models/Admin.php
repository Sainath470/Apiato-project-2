<?php

namespace App\Containers\BlogsSection\Admin\Models;

use App\Ship\Parents\Models\Model;
use Laravel\Passport\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Model implements JWTSubject
{
    use HasApiTokens;
    protected $table = 'admins';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'password',
        'remember_token',
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
    protected string $resourceKey = 'Admin';

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

}
