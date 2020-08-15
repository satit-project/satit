<?php
    class CitasController
    {
        function __contruct()
        {

        }
        function index()
        {
            require_once('Views/Citas/show.php');
        }

        function show()
        {
            $listaCitas=Citas::all();
            require_once('Views/Citas/show.php');
        }
        
        function delete()
        {
            $id=$_GET['id'];
            Citas::delete($id);
            $this->show();
        }

        function search()
        {
            if(!empty($_POST['id']))
            {
                $id=$_POST['id'];
                $citas=Citas::searchById($id);
                $listaCitas[]=$citas;
                require_once('Views/Citas/show.php');
            }
            else
            {
                $listaCitas=Citas::all();
                require_once('Views/Citas/show.php');
            }
        }

        function error()
        {
            require_once('Views/Citas/error.php');
        }
    }


?>