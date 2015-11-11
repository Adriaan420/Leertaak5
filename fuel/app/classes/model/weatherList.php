<?php

class Model_WeatherList extends \Orm\Model
{
    protected static $_table_name = 'weather_list';

    protected static $_properties = array('id', 'date', 'type');

    protected static $_has_many = array('weatherData' => array(
        'model_to' => 'Model_WeatherData',
        'key_from' => 'id',
        'key_to' => 'weather_list_id'
    ));
}