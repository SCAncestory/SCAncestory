<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use CrudTrait;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'history';
}
