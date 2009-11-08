# Geo Location Service

* Version: 3.0
* Author: Joseph Denne (joseph.denne@airlock.com)
* Build Date: 08th November 2009
* Requirements: Symphony 2.0.2 or later

## Summary

Uses Symphony's services API to provide the following location parameters:

 - Country
 - Region
 - City
 - Latitude
 - Longitude

What is the services API? A set of tools designed to extend Symphony's functionality via webservices. It's nothing but a proposal and an example service (this one) at this stage, so don't get too excited.

## Installation

1. Upload the 'geolocation_service' folder in this archive to your Symphony 'extensions' folder
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
3. "Remaining" tells you how many you have left
4. "Country" is the country that the page-requesting user is in
5. "Region" is the region that the page-requesting user is in
6. "City" is the city that the page-requesting user is in
7. "Latitude" is the current latitiude of the page-requesting user
8. "Longitude" is the current longitude of the page-requesting user
9. "Error" provides information in the event of an error or a lookup overrun

[NOTES]

Free usage of the lookup service is limited to 100 requests/hour per domain or server IP. This cap may or may be unlocked in future and may or may become a standard charged for service.

In the mean time, if you need extended access to the service, please contact us to discuss the removal of the cap.

We track the requesting domain, IP and Symphony version number of all requests along with the service response. This is used for further enhancing the service and for giving us a view of the versions of Symphony in the wild.

You can contact me directly at joseph.denne@airlock.com

