<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Fillable model attributes.
     * 
     * @var array<int,string>
     */
    protected $fillable = [
        'email',
        'subject',
        'message',
        'last_name',
        'first_name',
    ];
}
