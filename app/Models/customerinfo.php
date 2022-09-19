<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Print_;

class customerinfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'CustomerInfo';
    public $primaryKey = 'idCustomer';
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
