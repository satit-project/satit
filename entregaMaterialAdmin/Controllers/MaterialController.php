<?php
    class MaterialController
    {
        function __contruct()
        {

        }
        function index()
        {
            require_once('Views/Material/show.php');
        }

        function show()
        {
            $listaMaterial=Material::all();
            require_once('Views/Material/show.php');
        }
        
        function delete()
        {
            $id=$_GET['id'];
            Material::delete($id);
            $this->show();
        }

        function search()
        {
            if(!empty($_POST['id']))
            {
                $id=$_POST['id'];
                $material=Material::searchById($id);
                $listaMaterial[]=$material;
                require_once('Views/Material/show.php');
            }
            else
            {
                $listaMaterial=Material::all();
                require_once('Views/Material/show.php');
            }
        }

        function error()
        {
            require_once('Views/Material/error.php');
        }
    }


?>