<?php
    $controllers = array('file'=>['index', 'error']);
    if(array_key_exists($controller, $controllers))
    {
        if(in_array($action, $controllers[$controller]))
        {
            call($controller, $action);
        }
        else
        {
            call('file', 'error');
        }
    }
    else
    {
        call('file', 'error');
    }

    function call($controller, $action)
    {
        require_once('Controllers/'.$controller.'Controller.php');
        switch($controller)
        {
            case 'file':
                require_once('Models/File.php');
                $controller = new FileController();
            break;
            default:
            break;
        }
        $controller->{$action}();
    }

?>