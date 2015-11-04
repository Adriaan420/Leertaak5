<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2015 Fuel Development Team
 * @link       http://fuelphp.com
 */
use Auth\Auth;

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller_Template
{
	public $template = 'template_admin';

	public function before()
	{
		parent::before(); // Without this line, templating won't work!

		$this->template->head = View::forge('_partial/head');
		$this->template->header = View::forge('_partial/header');
		$this->template->footer = View::forge('_partial/footer');

		$this->template->title = 'home';

		// do stuff
	}

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->body = View::forge('welcome/index');
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		$this->template->body = View::forge('welcome/404');
	}
}
