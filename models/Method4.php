<?php namespace Mohsin\Selectable\Models;

use Model;

/**
 * Method4 Model
 */
class Method4 extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_selectable_method4s';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    public function listStatuses($fieldName, $value, $formData)
    {
        return [
            'Unpublished',
            'Published',
            'Archived'
        ];
    }
}
