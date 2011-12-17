<?php

	Class extension_geolocation_service extends Extension {

		public function about() {
			return array('name' => 'Geo Location Service',
						 'version' => '3.2',
						 'release-date' => '2011-12-17',
						 'author' => array('name' => 'Joseph Denne',
										   'website' => 'http://josephdenne.com/',
										   'email' => 'me@josephdenne.com')
				 		);
		}

		public static function lookup($ip=NULL) {
			require_once('lib/class.geolocation_service.php');

			if(is_null($ip)) $ip = $_SERVER['REMOTE_ADDR'];

			return _geoloc::lookup($ip);
		}
	}