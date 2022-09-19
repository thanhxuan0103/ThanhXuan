<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerinfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'CustomerInfo';
    protected $fillable = [
        'idCustomer ',
        'CustomerName',
        'CustomerPhone',
        'OrgName',
        'CustomerMail',
        'MiddlemanName',
        'DateAdd'
    ];
    public function CustomerRequirement()
    {
        return $this->hasMany(customerrequirement::class,'idCustomer','idCustomer');
    }
}
