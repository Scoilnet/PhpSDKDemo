Scoilnet PHP SDK DEMO
=============

This website demo is a quick example of how to use the [Scoilnet PHP SDK](https://github.com/Scoilnet/PhpSDK)

For full documentation on the Scoilnet SDK, see [Scoilnet's developer documentation](https://www.scoilnet.ie/scoilnet-api/documentation)

1) Installation
----------------------------------

This demo uses [Composer](http://getcomposer.org) to manage its dependencies. It is the recommended way to install it on your own server.

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to create the demo:

    php composer.phar create-project scoilnet/php-sdk-demo path/to/site

Composer will install demo site and all its dependencies under the
`path/to/site` directory.


2) Server Configurtion
----------------------------------
Your server configuration should point to the web/ folder. 
When set up go to http://localhost/ and if everything was setup correctly you should see resource showing and be able to preform searches.

3) Generate your own keys
----------------------------------
You should generate your own api keys. To do this go to [Application Manager](https://www.scoilnet.ie/scoilnet-api/application-management/) on Scoilnet and create a new application.
Take a note of the client id, client secret, and api key.
Now open the index.php file in the web folder and change the client_id, client_secret, and api_key to the ones you made on the Scoilnet site.

    protected $oAuth2Config = [
                   ...
                    //Update the following keys with your own. Go to https://www.scoilnet.ie/scoilnet-api/application-management/ to optain your own keys.
                    "client_id" =>"Your Client Id", 
                    "client_secret" =>"Your Client Secret",
                    "api_key" => "Your api key",
                ];


    
