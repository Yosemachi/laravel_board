<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
    ];
}