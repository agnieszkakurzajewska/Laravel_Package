<?php

namespace Recruitment\Products\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name',
        'id',
        'amount',

    ];
}
