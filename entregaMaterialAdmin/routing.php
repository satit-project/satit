<?php
    $controllers = array('material'=>['index', 'show', 'delete', 'search', 'error']);
    if(array_key_exists($controller, $controllers))
    {
        if(in_array($action, $controllers[$controller]))
        {
            call($controller, $action);
        }
        else
        {
            call('material', 'error');
        }
    }
    else
    {
        call('material', 'error');
    }

    function call($controller, $action)
    {
        require_once('Controllers/'.$controller.'Controller.php');
        switch($controller)
        {
            case 'material':
                require_once('Models/Material.php');
                $controller = new MaterialController();
            break;
            default:
            break;
        }
        $controller->{$action}();
    }

?>