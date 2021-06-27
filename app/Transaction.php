<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'title', 'type', 'amount', 'slug'
    ];

    public function getAmountAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y H:i', strtotime($value));
    }

}
