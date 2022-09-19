<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerrequirement extends Model
{
    use HasFactory;
    protected $table = 'CustomerRequirement';
    public $timestamps = false;
    protected $fillable  = [
        'idRequirement',
        'idCustomer',
        'idUserAdd',
        'SoftwareName',
        'ReqirementDesc',
        'Note',
        'Price',
        'Status',
        'DateAdd'
    ];
    protected  $primaryKey = 'idRequirement';
    public function CustomerInfo()
    {
        return $this->hasOne(customerinfo::class,'idCustomer','idCustomer');
    }
    public function CustomerReqContract()
    {
        return $this->hasOne(contract::class,'idRequirement','idRequirement');
    }


}
