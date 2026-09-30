<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'company_id',
        'part_number'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}