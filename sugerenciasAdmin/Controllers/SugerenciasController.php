<?php
    class SugerenciasController
    {
        function __contruct()
        {

        }
        function index()
        {
            require_once('Views/Sugerencias/show.php');
        }

        
        function show()
        {
            $listaSugerencias=Sugerencias::all();
            require_once('Views/Sugerencias/show.php');
        }
       
        function search()
        {
            if(!empty($_POST['id']))
            {
                $id=$_POST['id'];
                $sugerencias=Sugerencias::searchById($id);
                $listaSugerencias[]=$sugerencias;
                require_once('Views/Sugerencias/show.php');
            }
            else
            {
                $listaSugerencias=Sugerencias::all();
                require_once('Views/Sugerencias/show.php');
            }
        }
        function error()
        {
            require_once('Views/Sugerencias/error.php');
        }
    }


?>