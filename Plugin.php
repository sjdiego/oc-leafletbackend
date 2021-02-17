<?php namespace RW\LeafletBackend;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'LeafletBackend',
            'description' => 'Adds a FormWidget in backend forms to be able to use Leaflet Maps',
            'author'      => 'xatlas@github',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'RW\LeafletBackend\FormWidgets\LeafletMap' => [
                'label' => 'LeafletMap',
                'code' => 'leafletmap',
            ],
        ];
    }
}
