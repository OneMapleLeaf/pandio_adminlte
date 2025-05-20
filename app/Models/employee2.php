<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee2 extends Model
{
    use HasFactory;
    protected $table = 'employee2';
    protected $primarykey = 'id';
    protected $fillable = [
        'emp_fname',
        'emp_lname',
        'emp_address',
        'emp_phone'
    ];
}
