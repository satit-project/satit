<?php
    class CursosController
    {
        function __contruct()
        {

        }
        function index()
        {
            require_once('Views/Cursos/bienvenido.php');
        }
        function register()
        {
            require_once('Views/Cursos/register.php');
        }
        function save()
        {
            if(!isset($_POST['estatus']))
            {
                $estatus="of";
            }
            else
            {
                $estatus="on";
            }
            $cursos = new Cursos(NULL, $_POST['nombre'], $_POST['descripcion'], $_POST['horario'], $_POST['fecha'], $estatus);
            Cursos::save($cursos);
            $this->show();
        }
        function show()
        {
            $listaCursos=Cursos::all();
            require_once('Views/Cursos/show.php');
        }
        function updateshow()
        {
            $id = $_GET['idCursos'];
            $cursos=Cursos::searchById($id);
            require_once('Views/Cursos/updateshow.php');
        }
        function update()
        {
            $cursos = new Cursos($_POST['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['horario'], $_POST['fecha'], $_POST['estatus']);
            Cursos::update($cursos);
            $this->show();
        }
        function delete()
        {
            $id=$_GET['id'];
            Cursos::delete($id);
            $this->show();
        }
        function search()
        {
            if(!empty($_POST['id']))
            {
                $id=$_POST['id'];
                $cursos=Cursos::searchById($id);
                $listaCursos[]=$cursos;
                require_once('Views/Cursos/show.php');
            }
            else
            {
                $listaCursos=Cursos::all();
                require_once('Views/Cursos/show.php');
            }
        }
        function error()
        {
            require_once('Views/Cursos/error.php');
        }
    }


?>