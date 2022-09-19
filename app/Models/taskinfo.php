<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taskinfo extends Model
{
    use HasFactory;
    protected $table = 'TaskInfo';
    public $primaryKey = 'idTask';
    public $timestamps = false;
    protected $dates = ['TaskStartTime','TaskEndTime','ExpectToEnd'];
    protected $fillable = [
        'idTask',
        'idSoftwareContract',
        'TaskName',
        'TaskDesc',
        'TaskStartTime',
        'TaskEndTime',
        'ExpectToEnd',
        'TaskidUser',
        'UserAddTask',
        'Status',
    ];
    public function TaskToContract(){
        return $this->hasOne(contract::class, 'idContract','idSoftwareContract');

    }
    public function UserTask(){
        return $this->hasOne(User::class,'id','TaskidUser');
    }

}
