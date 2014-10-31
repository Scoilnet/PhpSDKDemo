<?php

require '../vendor/autoload.php';

/**
 * Example of the Scoilnet Search API
 * 
 * @author Paul Schweppe <paul@fluid-rock.com>
 */
class scoilnetExample {
    
    /**
     * The Scoilnet OAuth client object
     * @var \OAuth2\ScoilnetClient
     */
    protected $scoilnetClient;
    
    /**
     * Default search params
     * @var array 
     */
    protected $defaultConfig = array();
    
    /**
    *  Configuration for the Scoilnet OAuth client. You will need to add the following values 
    *  - client_id: (required) The application ID.
    *  - client_secret: (required) The application secret.
    *  - api_key: (required) The application secret key.
    */
    protected $oAuth2Config = [
                    //live end points
                    "authorize_uri" =>"https://www.scoilnet.ie/oauth/v2/auth",
                    "access_token_uri" =>"https://www.scoilnet.ie/oauth/v2/token",
                    "base_uri" => "https://www.scoilnet.ie/",
        
                    //Update the following keys with your own. Go to https://www.scoilnet.ie/scoilnet-api/application-management/ to optain your own keys.
                    "client_id" =>"1_4dk0ukekm0mcs4o8g0cok4kc8sgwg4sw88wswkgw880404kk8s", 
                    "client_secret" =>"48o2xyiar14wscow04swc0ww8ogsg8kgo40wcogwgo4wk4c0ss",
                    "api_key" => "71cce7b5a4f7be8bbddff76b88b107052a084bacdf5e704d99ef0940c1746a44",
                ];
    
   /**
    *  Creates the Scoilnet API client and sets Caching folder for the oAuth2 token
    */
    public function __construct() {
        
        $this->defaultConfig = array('limit' => '20');
        $this->scoilnetClient = new \ScoilnetSDK\ScoilnetClient($oAuth2Config);
        $this->scoilnetClient->setCacheFile($this->applicationDirectory().'/Cache/code.secure');
    }
    
    /**
     * Runs the scoilnet search 
     * @return array
     */
    protected function search(){
        
        $params = array_merge($this->getParams(),$this->defaultConfig );
        
        $response = $this->scoilnetClient->search($params);
        if($response['success'] == false){
            die($response);
        }
        
        return $response;
    }
    
    /**
     * Displays the search
     */
    public function display(){
        
        //Start Twig Templating engine
        $loader = new Twig_Loader_Filesystem($this->applicationDirectory().'/Templates');
        $twig = new Twig_Environment($loader, array(
            'cache' =>  $this->applicationDirectory().'/Cache',
            'debug' => true,
        ));

        //Add Path function to Twig
        $function = new Twig_SimpleFunction('path', function ($route,$param) {
            return $route.'?'.http_build_query($param);
        });
        $twig->addFunction($function);
        
        //Add Pagination extension to Twig
        $twig->addExtension(new \TwigScoilnetExtension\PaginationExtension());
        
        //Add Group Curriculum Extension to Twig
        $twig->addExtension(new \TwigScoilnetExtension\GroupCurriculumExtension());
        $twig->addExtension(new Twig_Extension_Debug());
        
        //Load the twig template file 
        $template = $twig->loadTemplate('index.html');
        
        //Runs the search and gets the results
        $results = $this->search();

        //Get the current page the user is on. Default is the first page
        $page = (isset($_GET['page'])?intval($_GET['page']):1);
        
        //Displays the template
        echo $template->render(array('results' => $results
                ,'params'=>$this->getParams()
                ,'route' => '/index.php'
                ,'currentPage' => $page
                ,'defaultConfig' =>$this->defaultConfig)
                );
    }

    /**
     * Gets and filters all paramaters
     * @return array
     */
    protected function getParams(){
        $params = array();
        if(is_array(filter_input_array(INPUT_GET))){
            foreach(filter_input_array(INPUT_GET) as $paramName => $paramValue){
                $params[$paramName] = $paramValue;
            }
        }
       
        return $params;
    }
    
    /**
     * Gets the application directory. 
     * @return string Application directory
     */
    protected function applicationDirectory(){
        $webRoot = $_SERVER['DOCUMENT_ROOT'];
        $folders = explode('/',$webRoot);

        $newFolders = array_slice($folders, 0, -1);
        return implode('/', $newFolders);
    }
    
}

//Creates scoilnet example
$example = new scoilnetExample();

//Displays the search
$example->display();


