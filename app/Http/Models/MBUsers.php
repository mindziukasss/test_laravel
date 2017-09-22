<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MBUsers extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    public $incrementing = false;


    protected $table = 'mb_users';
    protected $fillable = ['id', 'first_name', 'last_name', 'resource_id', 'email', 'password'];

    protected $hidden = [
        'password', 'remember_token',
    ];


}