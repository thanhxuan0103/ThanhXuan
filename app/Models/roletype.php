<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roletype extends Model
{
    use HasFactory;
    protected $table = 'roletype';
    public $timestamps = false;
    public $fillable = [
        'idRole',
        'RoleName',
    ];
    public function role(){
        return $this->hasMany(role::class, 'idRole','idRole');
    }
}
