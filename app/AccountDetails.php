<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountDetails extends Model
{
    protected $fillable = [
        'bank_name', 'account_name', 'account_number', 'swift_code', 'routing_number'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
