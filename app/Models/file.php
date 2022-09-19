<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $table = 'file';
    protected $primaryKey = 'idFile';
    public $timestamps = false;
    public $dates = ['UploadDate'];
    protected $fillable = [
        'idFile',
        'File',
        'FileName',
        'UploadDate',
        'idUser',
        'Prefix',
    ];
    public function FileOwner()
    {
        return $this->hasOne(User::class,'idUser','idUser');
    }
}
