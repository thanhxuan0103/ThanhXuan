<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requirementlog extends Model
{
    use HasFactory;
    protected $table = 'requirementlog';
    public $timestamps = false;
    public $primaryKey = 'idReqLog';
    protected $fillable  = [
        'idReqLog',
        'idRequirement',
        'OldStatus',
        'NewStatus',
        'Reason',
        'Date',
        'User',
    ];
    public function logReq(){
        return $this->belongsTo(customerrequirement::class);
    }
}
