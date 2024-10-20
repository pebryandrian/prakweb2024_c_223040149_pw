<?php   

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() 
    {
        $url = $this->parseURL();
        
        // Cek apakah file controller yang diminta ada
        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Include file controller yang sudah dipastikan ada
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Cek apakah method ada dalam controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Mengelola parameter jika ada
        $this->params = $url ? array_values($url) : [];

        // Menjalankan controller, method, dan parameter yang sesuai
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() 
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return []; // Mengembalikan array kosong jika tidak ada parameter URL
    }
}
