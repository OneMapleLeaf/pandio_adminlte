<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    //gawa muna table ha bago migrate
    protected $table = 'employee';
    protected $primarykey = 'id';
    protected $fillable = [
        'emp_fname',
        'emp_lname',
        'emp_midname',
        'emp_age',
        'emp_address',
        'emp_zip'
    ];
}
