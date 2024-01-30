<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemgroups extends Model
{
    use HasFactory;
    protected $fillable = [
        'itemgroupsname',
    ];
}

