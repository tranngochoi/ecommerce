<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Suggest;
use App\Models\Transaction;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function suggests()
    {
        return $this->hasMany(App::Suggest);
    }
    public function transactions()
    {
        return $this->hasMany(App::Transaction);
    }
    public function contacts()
    {
        return $this->hasMany(App::Contact);
    }
    public function comments()
    {
        return $this->hasMany(App::Comment);
    }
    public function role()
    {
        return $this->belongsTo(App::Role);
    }

}
