<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $fillable = [
        'Full Names',
        'Date Joined',
        'amount',
        'age',
        'gender',
        'phone'
    ];

    public function shares() {
        return $this->hasMany(Shares::class);
    }
}
