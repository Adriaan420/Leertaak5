<?php

class Model_WeatherData extends \Orm\Model
{
    protected static $_table_name = 'weather_list_data';
    
    protected static $_properties = array('id', 'weather_list_id', 'sort', 'country', 'data');
}