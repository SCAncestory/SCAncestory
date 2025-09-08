<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegaliaItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regaliaitem';


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
        'name',
    ];
}
