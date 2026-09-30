<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'address',
        'email',
        'contact'
    ];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }
}