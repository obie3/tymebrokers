<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    public function credit() {
        return $this->hasMany('App\Credit');
    }

    public function debit() {
        return $this->hasMany('App\Debit');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
