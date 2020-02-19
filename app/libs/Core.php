<?php
/*
 *
 *
 */

class Core
{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = array();

    public function __construct()
        {
            $url = $this->getUrl();
             if (file_exists('../app/controllers/' .ucwords($url[0]).'.php')){
             $this->currentController = ucwords($url[0]);
             }
        }
    public function getUrl(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $URL = explode('/', $url);
            return $url;
        }
    }
}