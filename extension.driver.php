<?php

	Class extension_geoloc extends Extension {

		public function about() {
			return array('name' => 'Geo Location Service',
						 'version' => '3.0',
						 'release-date' => '2009-08-30',
						 'author' => array('name' => 'Joseph Denne',
										   'website' => 'http://josephdenne.com/',
										   'email' => 'joseph.denne@airlock.com')
				 		);

		}

		public static function lookup($ip=NULL) {
			require_once('lib/class.geoloc.php');

			if(is_null($ip)) $ip = $_SERVER['REMOTE_ADDR'];

			return _geoloc::lookup($ip);

		}
	}

