<?php namespace Mohsin\Selectable\Classes;

/**
 * Status Manager
 */
class StatusManager
{
    public static function getStatuses()
    {
        return [
            'Unpublished',
            'Published',
            'Archived'
        ];
    }
}
