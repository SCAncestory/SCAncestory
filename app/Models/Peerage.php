<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peerage extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'peerage';
    public $timestamps = false;
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'peerage',
    ];
}
