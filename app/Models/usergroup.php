<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserGroup extends Model
{
    use HasFactory;
    protected $table = 'usergroup';
    protected $fillable = ['idUserGroup','GroupName'];
    public $timestamps = false;
    public function UserGroup() {
        return $this->hasMany(User::class,'idUserGroup','idUserGroup');
      }
}
