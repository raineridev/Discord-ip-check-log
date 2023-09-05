<?php
$ip = $_POST['input-ip'] ?? null;
$ipData = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=77.242.31.255"));
$ipRequest = $ipData->geoplugin_request;
$countryName = $ipData->geoplugin_countryName;
$countryCode = $ipData->geoplugin_countryCode; // BR
$cityName = $ipData->geoplugin_city;
$regionName = $ipData->geoplugin_regionName;
$currencySymbol = $ipData->geoplugin_currencySymbol;
$currencyCode = $ipData->geoplugin_currencyCode;
$currencyCodeUTF8 = $ipData->geoplugin_currencySymbol_UTF8;
$latitudeNumber = $ipData->geoplugin_latitude;
$longitudeNumber = $ipData->geoplugin_longitude;
$continentName = $ipData->geoplugin_continentName;
$currencyConverter = $ipData->geoplugin_currencyConverter;