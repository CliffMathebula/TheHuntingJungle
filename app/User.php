<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = ['name', 'surname', 'id_number', 'email', 'cellphone', 'password'];
}
