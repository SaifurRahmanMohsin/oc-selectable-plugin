<?php namespace Mohsin\Selectable\Models;

use Model;

/**
 * Method3 Model
 */
class Method3 extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_selectable_method3s';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    public function getDropdownOptions($fieldName, $value, $formData)
    {
        if (in_array($fieldName, array('status_dropdown','status_radio', 'status_balloon'))) {
            return [
                'Unpublished',
                'Published',
                'Archived'
            ];
        }
    }
}
