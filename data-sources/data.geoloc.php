<?php

	require_once(TOOLKIT . '/class.datasource.php');

	Class datasourceGeoloc extends Datasource {

		public $dsParamROOTELEMENT = 'geolocation_service';

		public function about() {
			return array('name' => 'Geo Location Service',
						 'version' => '3.2',
						 'release-date' => '2011-12-17',
						 'author' => array('name' => 'Joseph Denne',
										   'website' => 'http://josephdenne.com/',
										   'email' => 'me@josephdenne.com'),
						 'description' => 'An open geo location service providing the location information about your users'
				 		);
		}

		public function grab(&$param_pool) {

			$result = new XMLElement($this->dsParamROOTELEMENT);

			$driver = Frontend::instance()->ExtensionManager->create('geolocation_service');

			$location = extension_geolocation_service::lookup();

			if(is_null($location)) {
				$result->appendChild(new XMLElement('error', 'Unknown location'));
			}
			else {
				$result = $location;
			}

			return $result;
		}
	}