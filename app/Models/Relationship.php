<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relationship extends Model
{
    use CrudTrait;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'relationships';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'peer_id',
        'student_id',
        'peerage_id',
        'start_date',
        'end_date',
        'status',
        'notes',
        'deleted_at',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function peer(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function peerage(): BelongsTo
    {
        return $this->belongsTo(Peerage::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
