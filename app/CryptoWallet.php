<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CryptoWallet extends Model
{
    //
    protected $fillable = [
        'user_id', 'name', 'address',
    ];

}
