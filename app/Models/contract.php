<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates = ['CreateDate','SignDate'];
    protected $table = 'softwarecontract';
    protected $primaryKey ='idContract';

    protected $fillable = [
        'idContract',
        'Price',
        'idRequirement',
        'Status',
        'BuildStatus',
        'CreateDate',
        'SignDate',
        'InsuranceExpDate',
        'Creator',
    ];
    public function CustomerRequirement()
    {
        return $this->hasOne(customerrequirement::class,'idRequirement','idRequirement');
    }
    public function CreatorContract(){
        return $this->hasOne(User::class,'id','Creator');
    }
    public function ContractTask(){
        return $this->hasMany(taskinfo::class,'idSoftwareContract','idContract');
    }

}
