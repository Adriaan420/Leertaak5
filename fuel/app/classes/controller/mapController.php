<?php

use Auth\Auth;
use Fuel\Core\Response;

class Controller_mapController extends Controller_Template
{

    public $template = 'template_map';

    public function before()
    {
        parent::before(); // Without this line, templating won't work!

        $this->template->head = View::forge('_partial/head');
        $this->template->header = View::forge('_partial/header');
        $this->template->footer = View::forge('_partial/footer');

        if ( ! Auth::check())
        {
            Response::redirect('/auth/login');
        }

        // do stuff
    }

    public function action_index()
    {
        $this->template->body = View::forge('map/map');
    }

    public function after($response)
    {
        $response = parent::after($response); // not needed if you create your own response object

        // do stuff

        return $response; // make sure after() returns the response object
    }

}
