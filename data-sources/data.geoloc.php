<?php

	require_once(TOOLKIT . '/class.datasource.php');
	require_once(EXTENSIONS . '/geolocation_service/lib/class.geolocation_service.php');

	Class datasourceGeoloc extends Datasource {

		public $dsParamROOTELEMENT = 'geolocation_service';

		public function grab(&$param_pool) {

			$result = new XMLElement($this->dsParamROOTELEMENT);

			$ip = $_SERVER['REMOTE_ADDR'];

			$location = _geoloc::lookup($ip);

			if(is_null($location)) {
				$result->appendChild(new XMLElement('error', 'Unknown location'));
			}
			else {
				$result = $location;
			}

			return $result;
		}
	}