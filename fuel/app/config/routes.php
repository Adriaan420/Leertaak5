<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

	'auth/login' => 'auth/login',
	'auth/logout' => 'auth/logout',

	'api/stations' => 'weatherController/list',
    'api/station' => 'weatherController/station',
    'api/station/update' => 'weatherController/stationUpdate',

	'home' => 'measurements/index',
	'home/map' => 'mapController/index'
);
