<?
require_once 'controllers/Errores.php'; 

class App{
    
    function __construct(){
        
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/',$url);
        
        
        //var_dump($url);
        $archivoController = 'controllers/'. $url[0] .'.php';
        
        // valida si existe el controlador
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            
            // valida si existe el metodo
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
          // controlador de error para 
        }else{
            $controller = new Errores();
        }
        

        
    }
}

?>