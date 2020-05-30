<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    protected $table = 'calender';

    protected $fillable = [
        'play_date', 'status',
    ];
}
