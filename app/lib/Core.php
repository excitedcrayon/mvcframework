<?php 
    /**
     * Core class
     */
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            //print_r($this->getURL());
            $url = $this->getURL();

            # Look in controllers folder for first value, ucwords capitalises first letter
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                # Set new controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }

            # Require the controller
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            # Check for second parameter of the url
            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            # Get parameters
            $this->params = $url ? array_values($url) : [];

            # Callback with array of params
            call_user_func_array(
                [$this->currentController, $this->currentMethod],
                $this->params
            );
        }

        public function getURL(){

            if(isset($_GET['url'])){

                $url = rtrim($_GET['url'],'/');

                # allows you to filter variables as string/number
                $url = filter_var($url, FILTER_SANITIZE_URL);
                # break url into an array
                $url = explode('/',$url);
                return $url;
            }
        }
    }
?>