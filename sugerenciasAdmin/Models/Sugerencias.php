<?php
    class Sugerencias
    {
        private $id;
        private $descripcion;
        private $empleadoid;
        private $fecha;

        function __construct($id, $fecha, $descripcion, $empleadoid)
        {
            $this->setId($id);
            $this->setFecha($fecha);
            $this->setDescripcion($descripcion);
            $this->setEmpleadoId($empleadoid);
        }
        
        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function getEmpleadoId()
        {
            return $this->empleadoid;
        }
        public function setEmpleadoId($empleadoid)
        {
            $this->empleadoid = $empleadoid;
        }

        public function getFecha()
        {
            return $this->fecha;
        }
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }

        public static function all()
        {
            $db = Database::getConnect();
            $listaSugerencias=[];
            $select = $db->query('SELECT * FROM comments');
            foreach($select->fetchAll() as $sugerencias)
            {
                $listaSugerencias[]=new Sugerencias($sugerencias['id'], $sugerencias['commentDate'], $sugerencias['employeeID'],$sugerencias['comment']);
            }
            return $listaSugerencias;
        }

        public static function searchById($id)
        {
            $db = Database::getConnect();
            $select=$db->prepare('SELECT * FROM comments WHERE id=:id');
            $select->bindValue('id', $id);
            $select->execute();
            $sugerenciaDb=$select->fetch();
            $sugerencias=new Sugerencias($sugerenciaDb['id'], $sugerenciaDb['commentDate'], $sugerenciaDb['employeeID'],$sugerenciaDb['comment']);
            return $sugerencias;
        }
    }

?>