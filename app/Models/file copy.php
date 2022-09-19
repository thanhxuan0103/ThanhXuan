<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $table = 'task';
    protected $primaryKey = 'idTask';
    public $timestamps = false;
    protected $fillable = [
        'idTask',
        'idSoftwareContract',
        'TaskName',
        'TaskDesc',
        'TaskStartTime',
        'TaskEndTime',
        'ExpectToEnd',
        'TaskidUser',
        'Status'
    ];
    public function TaskOfContract()
    {
        return $this->hasOne(contract::class,'idContract','idSoftwareContract');
    }
}
