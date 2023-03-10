<?php

namespace App;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ShopkeeperResetPasswordNotification;

class Shopkeeper extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    protected $guard = 'shopkeeper';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password','avatar',
    ];*/

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

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ShopkeeperResetPasswordNotification($token));
    }
}
