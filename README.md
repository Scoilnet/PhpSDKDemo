Scoilnet PHP SDK
=============

Scoilnet's API allows you to easily search resources from scoilnets database on you own site.

For full documentation, see [Scoilnet's developer documentation](https://www.scoilnet.ie/scoilnet-api/documentation)

Usage
-----

In addition to the samples below, we have included a very basic demo application in the `demo` directory. The demo uses 
Twig's templating engine to display the results. 

## Installation

Installation is a quick 4 step process:

1. Install ScoilnetSDK
2. Create your cache folder
3. Get API authentication keys from Scoilnet
4. Configuration

### Step 1: Install ScoilnetSDK
The preferred way to install this library is to rely on [Composer](http://getcomposer.org).
Just check on [Packagist](http://packagist.org/packages/) the version you want to install (in the following example, we used "dev-master") and add it to your `composer.json`:
``` js
{
    "require": {
        // ...
        "Scoilnet/PHPSDK": "dev-master"
    }
}
```

Alternatively you can download the scoilnetsdk folder and add it to your project.

### Step 2: Create your cache folder
For best performance a cache folder should be created that php can write too, but is not accessible by the web server.

### Step 3:Get API authentication keys from Scoilnet
To use the api you will need to login too scoilnet and obtain a client id, client secret key and api key. Go to the [scoilnet api section] (https://www.scoilnet.ie/scoilnet-api) for more information
on obtain application keys.

4. Configuration
For all requests, you must initialize the SDK with your Client ID, Client Secret and API Key.

<?php
    require '../scoilnetsdk/ScoilnetClient.php';

    $config = [
                "client_id" =>"[YOUR CLIENT ID]",
                "client_secret" =>"[YOUR CLIENT SECRET]",
                "api_key" => "[YOUR API KEY]",
                ];
        
    $this->scoilnetClient = new \OAuth2\ScoilnetClient($config);
    
    //Set the cache folder that you created in step3
    $this->scoilnetClient->setCacheFile("/var/www/searchAPI/sdk/Cache/");

    //See [scoilnet search documentation] (https://www.scoilnet.ie/scoilnet-api/documentation) for list of possible paramater options
    $params = array();

    //Make a search request
    $response = $this->scoilnetClient->search($params);
    
