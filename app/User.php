<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    protected $table= "users";
	protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'address',
        'tel',
        'gender_id'
    ];
    public function AdminGender() {
        return $this->belongsTo('App\Gender', 'gender_id');
    }
}
