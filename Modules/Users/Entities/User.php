<?php namespace Modules\Users\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'name', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = 
    [
        'password', 'remember_token', 'created_at', 'updated_at'
    ];



    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt( $value );
    }

}
