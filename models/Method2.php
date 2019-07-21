<?php namespace Mohsin\Selectable\Models;

use Model;

/**
 * Method2 Model
 */
class Method2 extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_selectable_method2s';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Jsonable fields
     */
    public $jsonable = ['status_checkboxlist'];

    public function getStatusDropdownOptions()
    {
        return [
            'Unpublished',
            'Published',
            'Archived'
        ];
    }

    public function getStatusRadioOptions()
    {
        return $this->getStatusDropdownOptions();
    }

    public function getStatusBalloonOptions()
    {
        return $this->getStatusDropdownOptions();
    }

    public function getStatusCheckboxlistOptions()
    {
        return $this->getStatusDropdownOptions();
    }
}
