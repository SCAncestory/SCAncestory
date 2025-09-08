<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegaliaType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regaliatype';


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
    ];
}
