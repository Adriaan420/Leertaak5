<?php

use Fuel\Core\Controller_Rest;

class Controller_WeatherController extends Controller_Rest
{

    public function get_list()
    {
        $stations = Model_Station::find('all');


        foreach ($stations as $i => $obj) {
            $stations[$i] = $obj->to_array();
        }

        return $this->response(json_encode($stations));
    }

    public function get_station()
    {
        return $this->response('hier komt de informatie van een station');
    }

    public function get_stationUpdate()
    {
        return $this->response('hier komt de updateinformatie informatie van een station');
    }
}