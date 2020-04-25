<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroExamen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registro_examen';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'fecha';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'date';
}
