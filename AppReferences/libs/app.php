<?
require_once 'controllers/Errores.php'; 

class App{
    
    function __construct(){
        
        $url = isset($_GET['url'])?$_GET['url']:null;
        $url = rtrim($url, '/');
        $url = explode('/',$url);
         
        // cuando se ingresa sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main;
            $controller->loadModel('main');
            $controller->render();
           return false; 
        }
        
        $archivoController = 'controllers/'. $url[0] .'.php';
        
        // valida si existe el controlador
        if(file_exists($archivoController)){
            require_once $archivoController;
            
            //inicializar el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            
            // numero de elementos del arreglo
            $nparam = sizeof($url);
            
            if($nparam > 1) {
                if($nparam > 2 ){
                    $param =[];
                    for( $i = 2; $i< $nparam ; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }

          // controlador de error para 
        }else{
            $controller = new Errores();
        }
        

        
    }
}

?>