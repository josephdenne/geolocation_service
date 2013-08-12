# Geolocation Service

* Version: 4.0
* Author: Joseph Denne (mail@josephdenne.com)
* Build Date: 12th August 2013
* Requirements: Symphony 2.2 or later

## Summary

An open geolocaiton service providing the following location parameters about your users -

 - Country
 - Region
 - City
 - Latitude
 - Longitude

## Installation

** Note: The latest version can alway be grabbed with
"git clone git@github.com:josephdenne/geolocation_service.git"

1. Rename the extension folder to 'geolocation_service' and upload it to your Symphony 'extensions' folder
2. Enable it by selecting "Geo Location Service", choose Enable from the with-selected menu, then click Apply

## Usage

1. Add "Geo Location Service" Data source to your page
2. You will notice a <geolocation> element in your page XML. This will contain five elements if successful, or an <error> element if not

## Examples

![Data Source attached to a page and working](http://josephdenne.com/workspace/images/screenshots/geo-location-service/attached-to-a-page.png)

![Data Source attached to a page and erroring](http://josephdenne.com/workspace/images/screenshots/geo-location-service/attached-to-a-page.png)

## Paraeter key

1. "ID" is the lookup number for the associated request
2. "Lookups" referes to the number of looks you have made within the last hour
3. "Country" is the country that the page-requesting user is in
4. "Region" is the region that the page-requesting user is in
5. "City" is the city that the page-requesting user is in
6. "Latitude" is the current latitiude of the page-requesting user
7. "Longitude" is the current longitude of the page-requesting user
8. "Error" provides information in the event of an error or a lookup overrun

[NOTES]

There is no cap on the usage of this service. I track requests and under significant load may need to restrict access. If I do, you will see a request for contact within the error response.

I track the requesting domain, IP and Symphony version number of all requests along with the service response. This is used for further enhancing the service.

You can contact me directly to discuss high-load usage at any time on mail@josephdenne.com