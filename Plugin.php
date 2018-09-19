<?php namespace Lime\Forms;

use Backend;
use System\Classes\PluginBase;

/**
 * forms Plugin Information File
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
          'name' => 'lime.forms::lang.plugin_name',
          'description' => 'lime.forms::lang.plugin_description',
          'author' => 'lime',
          'icon' => 'icon-list-alt'
      ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Lime\Forms\Components\ContactForm' => 'contactForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'lime.forms.some_permission' => [
                'tab' => 'forms',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'forms' => [
                'label'       => 'forms',
                'url'         => Backend::url('lime/forms/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lime.forms.*'],
                'order'       => 500,
            ],
        ];
    }
}
