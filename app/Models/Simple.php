<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simple extends Model
{
    use HasFactory;
//    public $timestamps = false;
    protected $table = 'simple';

    protected $guarded = [];
}
