<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Transaction extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function plan()
    {
        return $this->hasOne(Plan::class, 'id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class, 'id');
    }
}
