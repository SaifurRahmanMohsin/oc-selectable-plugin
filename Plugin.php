<?php namespace Mohsin\Selectable;

use Backend;
use System\Classes\PluginBase;

/**
 * Selectable Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Selectable',
            'description' => 'Test Plugin to demonstrate selectable form components',
            'author'      => 'Saifur Rahman Mohsin',
            'icon'        => 'icon-check-square'
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'selectable' => [
                'label'       => 'Selectable',
                'url'         => Backend::url('mohsin/selectable/method1'),
                'icon'        => 'icon-list',
                'order'       => 500,
                'sideMenu'    => [
                      'method1'   => [
                          'label' => 'Method 1',
                          'url'   => Backend::url('mohsin/selectable/method1'),
                          'icon'  => 'icon-square'
                      ],
                      'method2'   => [
                          'label' => 'Method 2',
                          'url'   => Backend::url('mohsin/selectable/method2'),
                          'icon'  => 'icon-square'
                      ],
                      'method3'   => [
                          'label' => 'Method 3',
                          'url'   => Backend::url('mohsin/selectable/method3'),
                          'icon'  => 'icon-square'
                      ],
                      'method4'   => [
                          'label' => 'Method 4',
                          'url'   => Backend::url('mohsin/selectable/method4'),
                          'icon'  => 'icon-square'
                      ],
                      'method5'   => [
                          'label' => 'Method 5',
                          'url'   => Backend::url('mohsin/selectable/method5'),
                          'icon'  => 'icon-square'
                      ]
                ]
            ],
        ];
    }
}
