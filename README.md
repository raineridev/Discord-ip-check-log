
# Discord Hook IP Log

This PHP based program. Where he gets the IP information like Country,City, Region,Currency,Currency Converter in Dollar,Currency Symbol UTF8,Latitude,Longitude,Continent. It gathers all this information and sends it to a specific channel in Discord Hook


## Setup

The main file is `push.php` on the 3rd line is located the API link we use to get the IP information, `http://www.geoplugin.net/json.gp?ip=77.255.255.255`
    
## Configure Discord WebHook
In the `discHook.php` file, you can check the variable where the webhook is contained, which is named as `$webhookurl` on line 4

![App Screenshot](https://media.discordapp.net/attachments/1147890671705915583/1148682680855183390/image.png?width=937&height=178)

## Trigger WebHook
Just access the file `discHook.php`


![App Screenshot](https://media.discordapp.net/attachments/1147890671705915583/1148683304711766076/image.png?width=249&height=153)


## Support

For support, email raineridev@gmail.com

