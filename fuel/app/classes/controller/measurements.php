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
		$query = Model_WeatherList::query()->where('date', Date::time()->format("%Y-%m-%d"))->where('type','max_cold');
		$coldList = $query->get_one();
		if($coldList != null) {
			$coldData = $coldList->weatherData;
		}else{
			$coldData = [];
		}

		$query = Model_WeatherList::query()->where('date', Date::time()->format("%Y-%m-%d"))->where('type','max_rain');
		$rainList = $query->get_one();
		if($rainList != null) {
			$rainData = $coldList->weatherData;
		}else{
			$rainData = [];
		}

		$data = [
			'coldData' => $coldData,
			'rainData' => $rainData
		];

		$this->template->title = '';
		$this->template->body = View::forge('measurements/index',$data);
	}

	public function after($response)
	{
		$response = parent::after($response); // not needed if you create your own response object

		// do stuff

		return $response; // make sure after() returns the response object
	}

}
