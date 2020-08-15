<?php
    $controllers = array('citas'=>['index', 'show', 'delete', 'search', 'error']);
    if(array_key_exists($controller, $controllers))
    {
        if(in_array($action, $controllers[$controller]))
        {
            call($controller, $action);
        }
        else
        {
            call('citas', 'error');
        }
    }
    else
    {
        call('citas', 'error');
    }

    function call($controller, $action)
    {
        require_once('Controllers/'.$controller.'Controller.php');
        switch($controller)
        {
            case 'citas':
                require_once('Models/Citas.php');
                $controller = new CitasController();
            break;
            default:
            break;
        }
        $controller->{$action}();
    }

?>