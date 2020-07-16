<?php
    $controllers = array('cursos'=>['index', 'register', 'save','show', 'updateshow', 'update', 'delete', 'search', 'error']);
    if(array_key_exists($controller, $controllers))
    {
        if(in_array($action, $controllers[$controller]))
        {
            call($controller, $action);
        }
        else
        {
            call('cursos', 'error');
        }
    }
    else
    {
        call('cursos', 'error');
    }

    function call($controller, $action)
    {
        require_once('Controllers/'.$controller.'Controller.php');
        switch($controller)
        {
            case 'cursos':
                require_once('Models/Cursos.php');
                $controller = new CursosController();
            break;
            default:
            break;
        }
        $controller->{$action}();
    }

?>