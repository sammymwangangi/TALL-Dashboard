<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shares extends Model
{
    public $fillable = [
        'member_id',
        'amount',
        'Date',
    ];

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
