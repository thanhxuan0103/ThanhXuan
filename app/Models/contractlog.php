<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contractlog extends Model
{
    use HasFactory;
    protected $table = 'contractlog';
    public $timestamps = false;
    public $primaryKey = 'idContractLog';
    protected $fillable  = [
        'idContractLog',
        'idContract',
        'OldStatus',
        'NewStatus',
        'Reason',
        'Date',
        'idUser',
    ];
}
