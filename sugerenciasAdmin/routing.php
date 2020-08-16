<?php
    $controllers = array('sugerencias'=>['index', 'show', 'search', 'error']);
    if(array_key_exists($controller, $controllers))
    {
        if(in_array($action, $controllers[$controller]))
        {
            call($controller, $action);
        }
        else
        {
            call('sugerencias', 'error');
        }
    }
    else
    {
        call('sugerencias', 'error');
    }

    function call($controller, $action)
    {
        require_once('Controllers/'.$controller.'Controller.php');
        switch($controller)
        {
            case 'sugerencias':
                require_once('Models/Sugerencias.php');
                $controller = new SugerenciasController();
            break;
            default:
            break;
        }
        $controller->{$action}();
    }

?>