<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class softwareacceptancedoc extends Model
{
    use HasFactory;
    protected $table = 'softwareacceptancedoc';
    protected $primaryKey = 'idDocument';
    public $timestamps = false;
    protected $fillable =[
        'idDocument',
        'idSoftwareContract',
        'ActFileName',
        'ActFile',
        'Status',
        'DocumentDesc',
        'idUser',
        'DateUpload' ,
        'DateSign',
    ];
}
