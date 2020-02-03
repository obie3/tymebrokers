<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;


class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'other_names', 'email', 'password', 'phone_number', 'address',
<<<<<<< HEAD
        'user_role', 'account_number',  'user_type', 'slug', 'username', 'clear_pword'
=======
        'user_role', 'account_number',  'user_type', 'slug'
>>>>>>> 8ce4872218d18530622cf42bc5333033f97161ae
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transaction() {
        return $this->hasMany('App\Transaction');
    }

    public function credit() {
        return $this->hasMany('App\Credit');
    }

    public function debit() {
        return $this->hasMany('App\Debit');
    }

    public function account_balance() {
        return $this->hasOne('App\AccountBalance');
    }
<<<<<<< HEAD

    public function account_details() {
        return $this->hasOne('App\AccountDetails');
    }
=======
>>>>>>> 8ce4872218d18530622cf42bc5333033f97161ae
}
