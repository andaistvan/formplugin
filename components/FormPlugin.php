<?php

namespace Arteriaweb\formplugin\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class FormPlugin extends ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Form plugin',
			'description' => 'arteriaweb.formplugin::lang.strings.plugin_desc',
		];
	}

	public function onMailSent()
	{
		$vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

		Mail::send('arteriaweb.formplugin::emails.message', $vars, function($message) {

		$message->to('andaistvan@gmail.com', 'Admin Person');
		$message->subject('This is a reminder');
		});
	}
}
