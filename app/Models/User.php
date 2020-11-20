<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role_id',
        'is_login',
        'activation_token',
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

    public function events(){
        return $this->hasMany(Event::class, 'created_by', 'id');
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function isAdmin(){
        if ($this->role->name =='Admin' && $this->is_login == '1'){
            return true;
        }
        return false;
    }

    public function isCreator(){
        if ($this->role->name =='Creator' && $this->is_login == '1'){
            return true;
        }
        return false;
    }

    public function isUser(){
        if ($this->role->name =='User' && $this->is_login == '1'){
            return true;
        }
        return false;
    }
}
