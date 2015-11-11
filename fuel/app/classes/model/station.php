<?php

class Model_Station extends \Orm\Model
{
    protected static $_table_name = 'stations';

    protected static $_primary_key = array('stn');

    protected static $_properties = array('stn', 'name', 'country', 'latitude', 'longitude', 'elevation');
}