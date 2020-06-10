<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartupFiles extends Model
{
    protected $fillable=[
        "title",
        "file" , 
        "startup_id"
    ];
}
