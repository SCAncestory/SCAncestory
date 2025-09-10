<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Person extends Model implements Auditable
{
    use CrudTrait;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'person';
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'CanonLoreId',
    ];
}
