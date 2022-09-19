<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'role';
    public $timestamps = false;
    protected $fillable = [
        'idRole',
        'idUser',
        'idContract',
    ];
    public function roleType(){
        return $this->hasOne(roletype::class, 'idRole','idRole');
    }
    public function ContractRole(){
        return $this->hasOne(contract::class,'idContract','idSoftwareContract');
    }
}
