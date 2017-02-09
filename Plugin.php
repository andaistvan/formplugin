<?php namespace Arteriaweb\Formplugin;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			'name' => 'Form plugin',
			'description' => 'arteriaweb.formplugin::lang.strings.plugin_desc',
			'author' => 'Anda István',
			'icon' => 'asterix'
		];

	}
    public function registerComponents()
    {
		 return [
			'Arteriaweb\Formplugin\Components\Formplugin' => 'formplugin',
		 ];
    }

    public function registerSettings()
    {
		 return [
			 
		 ];
    }
}
