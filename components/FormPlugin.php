<?php

namespace Arteriaweb\formplugin\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;

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
		$data = post();
		$rules = [
		        'name' => 'required|min:5',
		        'email' => 'required|email'
		];

		$validator = Validator::make($data, $rules);


		if ($validator->fails()){
			throw new ValidationException($validator);
		} else {

			$vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

			Mail::send('arteriaweb.formplugin::emails.message', $vars, function($message) {

			$message->to('andaistvan@gmail.com', 'Admin Person');
			$message->replyTo(post('email'), post('name'));
			$message->subject('This is a reminder');
			});

		}
	}
}
