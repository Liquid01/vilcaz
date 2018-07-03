<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\VerifyEmail;
use Illuminate\Database\Eloquent;
use Illuminate\Auth\EloquentUserProvider;

class User extends Authenticatable
{
    use Notifiable;

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password', 'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   public function verified()
   {
       return $this->token === null;
   }

   public function sendVerificationEmail()
   {
       $this->notify(new VerifyEmail($this));
   }

   public  function referrals()
   {
       return $this->hasMany('App\Referral');
   }



}
