<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peerage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'peerage',
    ];
}
