<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Urun extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'products';

    // تحديد الحقول التي يمكن ملؤها عبر  Mass Assignment
    protected $fillable = ['proname', 'prodescription', 'proimage'];

}
