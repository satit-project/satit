<?php
    class Citas
    {
        private $id;
        private $fecha;
        private $estatus;
        private $departamentoid;
        private $empleadoid;
        private $comentarios;

        function __construct($id, $fecha, $estatus, $departamentoid, $empleadoid, $comentarios)
        {
            $this->setId($id);
            $this->setFecha($fecha);
            $this->setEstatus($estatus);
            $this->setDepartamentoId($departamentoid);
            $this->setEmpleadoId($empleadoid);
            $this->setComentarios($comentarios);
        }
        
        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getFecha()
        {
            return $this->fecha;
        }
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }

        public function getEstatus()
        {
            return $this->estatus;
        }
        public function setEstatus($estatus)
        {
            $this->estatus = $estatus;
        }

        public function getDepartamentoId()
        {
            return $this->departamentoid;
        }
        public function setDepartamentoId($departamentoid)
        {
            $this->departamentoid = $departamentoid;
        }

        public function getEmpleadoId()
        {
            return $this->empleadoid;
        }
        public function setEmpleadoId($empleadoid)
        {
            $this->empleadoid = $empleadoid;
        }

        public function getComentarios()
        {
            return $this->comentarios;
        }
        public function setComentarios($comentarios)
        {
            $this->comentarios = $comentarios;
        }

        public static function all()
        {
            $db = Database::getConnect();
            $listaCitas=[];
            $select = $db->query('SELECT * FROM cita');
            foreach($select->fetchAll() as $citas)
            {
                $listaCitas[]=new Citas($citas['id'],$citas['fecha'], $citas['estatus'], $citas['departamento_id'],$citas['employeeID'], $citas['comments']);
            }
            return $listaCitas;
        }

        public static function searchById($id)
        {
            $db = Database::getConnect();
            $select=$db->prepare('SELECT * FROM cita WHERE id=:id');
            $select->bindValue('id', $id);
            $select->execute();
            $citasDb=$select->fetch();
            $citas=new Citas($citasDb['id'],$citasDb['fecha'], $citasDb['estatus'], $citasDb['departamento_id'],$citasDb['employeeID'], $citasDb['comments']);
            return $citas;
        }

        public static function delete($id)
        {
            $db=Database::getConnect();
            $delete=$db->prepare('DELETE FROM cita WHERE id=:id');
            $delete->bindValue('id', $id);
            $delete->execute();
        }
    }

?>