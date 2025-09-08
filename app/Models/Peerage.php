<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peerage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peerage';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'peerage',
    ];
}
