<?php

	require_once(TOOLKIT . '/class.datasource.php');

	Class datasourceGeoloc extends Datasource {

		public $dsParamROOTELEMENT = 'geoloc';

		public function about() {
			return array('name' => 'Geo Location Service',
						 'version' => '3.0',
						 'release-date' => '2009-11-08',
						 'author' => array('name' => 'Joseph Denne',
										   'website' => 'http://josephdenne.com/',
										   'email' => 'joseph.denne@airlock.com'),
						 'description' => 'Provides geo location information from the Symphony services API'
				 		);

		}

		public function grab(&$param_pool) {

			$result = new XMLElement($this->dsParamROOTELEMENT);

			$driver = Frontend::instance()->ExtensionManager->create('geoloc');

			$location = extension_geoloc::lookup();

			if(is_null($location)) {
				$result->appendChild(new XMLElement('error', 'Unknown location'));

			}
			else {
				$result = $location;

			}

			return $result;

		}

	}

