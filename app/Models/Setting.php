<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $casts=[
        'sidebar_collapse'=>'boolean',
        'is_dark_mode'=>'boolean'
    ];
}
