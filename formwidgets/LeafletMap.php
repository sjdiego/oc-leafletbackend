<?php namespace Rw\Leafletbackend\FormWidgets;

use Backend\Classes\FormWidgetBase;

class LeafletMap extends FormWidgetBase
{
    protected $defaultAlias = 'rw_leafletbackend_leaflet_map';

    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('leafletmap');
    }

    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    public function loadAssets()
    {
        $this->addCss('leaflet/leaflet.css', 'rw.leafletbackend');
        $this->addJs('leaflet/leaflet.js', 'rw.leafletbackend');
        $this->addJs('leaflet/leaflet-providers.js', 'rw.leafletbackend');
        $this->addJs('js/leafletmap.js', 'rw.leafletbackend');
    }

    public function getSaveValue($value)
    {
        return $value;
    }
}
