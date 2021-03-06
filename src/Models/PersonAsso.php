<?php

namespace FamilyTree365\LaravelGedcom\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $group
 * @property int    $gid
 * @property string $rela
 * @property string $created_at
 * @property string $updated_at
 */
class PersonAsso extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'person_asso';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['group', 'gid', 'indi', 'rela', 'import_confirm', 'created_at', 'updated_at'];
}
