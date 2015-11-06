<?php

use Auth\Auth;
use Fuel\Core\Response;

class Controller_Measurements extends Controller_Template
{

	public $template = 'template_admin';

	public function before()
	{
		parent::before(); // Without this line, templating won't work!

		$this->template->head = View::forge('_partial/head');
		$this->template->header = View::forge('_partial/header');
		$this->template->footer = View::forge('_partial/footer');
		$this->template->title = 'Measurements';
		$this->template->js = '';

		if ( ! Auth::check())
		{
			Response::redirect('/auth/login');
		}

		// do stuff
	}

	public function action_index()
	{
		$this->template->title = 'Dit is de landing page';
		$this->template->body = View::forge('measurements/index');
	}

	public function after($response)
	{
		$response = parent::after($response); // not needed if you create your own response object

		// do stuff

		return $response; // make sure after() returns the response object
	}

}
