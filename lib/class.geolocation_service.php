<?php

	Class _geoloc {

		public static function lookup($ip) {

			$ch = curl_init();

			// Notice: the request back to the service API includes your domain name
			// and the version of Symphony that you're using

			$version = Frontend::instance()->Configuration->get('version', 'symphony');
			$domain = $_SERVER[SERVER_NAME];

			curl_setopt($ch, CURLOPT_URL, "http://api.josephdenne.com/_geoloc/array/?symphony=".$version."&domain=".$domain."&ip=".$ip);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$geoinfo = curl_exec($ch);
			$info = curl_getinfo($ch);

			curl_close($ch);

			if ($geoinfo === false || $info['http_code'] != 200) {
				return;
			}
			else {
				$geoinfo = explode(',', $geoinfo);
			}

			$result = new XMLElement("geolocation");

			$included = array(
				'id',
				'lookups',
				'country',
				'region',
				'city',
				'lat',
				'lon',
				'error'
			);

			$i = 0;

			foreach($included as $geoloc) {
				$result->appendChild(new XMLElement($geoloc, $geoinfo[$i]));
				$i++;
			}

			return $result;
		}
	}