<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // protected array with the keys that are valid, when create method get the data array will have access to this keys
    protected $fillable = [
        'note',
        'user_id'
    ];
}
