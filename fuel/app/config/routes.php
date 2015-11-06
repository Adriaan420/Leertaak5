<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

	'auth/login' => 'auth/login',
	'auth/logout' => 'auth/logout',

	'home' => 'measurements/index',
	'home/map' => 'mapController/index'

);
