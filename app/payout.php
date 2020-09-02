<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payout extends Model
{
    //
    protected $fillable = [
        'user_id', 'wallet', 'amount','status'
    ];
}
