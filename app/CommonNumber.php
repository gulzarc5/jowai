<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommonNumber extends Model
{
    protected $table = 'common_number';

    protected $fillable = [
        'direct', 'house', 'ending', 'added_date',
    ];
}
