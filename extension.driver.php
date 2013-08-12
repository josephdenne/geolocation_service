<?php

	Class extension_geolocation_service extends Extension {

		public static function lookup($ip=NULL) {
			require_once(EXTENSIONS . '/geolocation_service/lib/class.geolocation_service.php');

			if(is_null($ip)) $ip = $_SERVER['REMOTE_ADDR'];

			return _geoloc::lookup($ip);
		}
	}