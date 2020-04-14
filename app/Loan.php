<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $fillable = [
        'member_id',
        'amount',
        'guarantor',
        'Type',
        'loan due',
        'Type',
        'Borrowed Date',
        'Amount Payable',
    ];

    public function member() {
        return $this->belongsTo(Member::class);
    }
}
