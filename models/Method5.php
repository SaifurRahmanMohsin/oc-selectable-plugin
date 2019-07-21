<?php namespace Mohsin\Selectable\Models;

use Model;

/**
 * Method5 Model
 */
class Method5 extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_selectable_method5s';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Jsonable fields
     */
    public $jsonable = ['status_checkboxlist'];
}
