<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // protected $table = 'Users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $dates =['TaskStartTime','ExpectToEnd','TaskEndTime'];
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
        'idusergroup',
        'iduseradd',
        'deleted'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // protected $userspm = User::join('usergroup', 'users.idUserGroup', '=', 'usergroup.idUserGroup')->get(['users.*', 'usergroup.GroupName']);
    public function UserGroup()
    {
        return $this->hasOne(UserGroup::class,'idUserGroup','idUserGroup');
    }
    public function FileOwn()
    {
        return $this->hasMany(UserGroup::class,'idUserGroup','idUserGroup');
    }
    public function UserDoTask(){
        return $this->hasMany(taskinfo::class,'TaskidUser','id');
    }
}
