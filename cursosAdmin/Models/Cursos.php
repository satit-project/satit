<?php
    class Cursos
    {
        private $id;
        private $nombre;
        private $descripcion;
        private $horario;
        private $fecha;

        function __construct($id, $nombre, $descripcion, $horario, $fecha)
        {
            $this->setId($id);
            $this->setNombre($nombre);
            $this->setDescripcion($descripcion);
            $this->setHorario($horario);
            $this->setFecha($fecha);
        }
        
        public function getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function getHorario()
        {
            return $this->horario;
        }
        public function setHorario($horario)
        {
            $this->horario = $horario;
        }

        public function getFecha()
        {
            return $this->fecha;
        }
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }
        
        public static function save($cursos)
        {
            $db=Database::getConnect();
            $insert=$db->prepare('INSERT INTO cursos VALUES(NULL, :nombre, :descripcion, :horario, :fecha)');
            $insert->bindValue('nombre', $cursos->getNombre());
            $insert->bindValue('descripcion', $cursos->getDescripcion());
            $insert->bindValue('horario', $cursos->getHorario());
            $insert->bindValue('fecha', $cursos->getFecha());
            $insert->execute();
        }

        public static function all()
        {
            $db = Database::getConnect();
            $listaCursos=[];
            $select = $db->query('SELECT * FROM cursos');
            foreach($select->fetchAll() as $cursos)
            {
                $listaCursos[]=new Cursos($cursos['id'],$cursos['fecha'],$cursos['titulo'],$cursos['descripcion'],$cursos['horario']);
            }
            return $listaCursos;
        }

        public static function searchById($id)
        {
            $db = Database::getConnect();
            $select=$db->prepare('SELECT * FROM cursos WHERE id=:id');
            $select->bindValue('id', $id);
            $select->execute();
            $cursosDb=$select->fetch();
            $cursos=new Cursos($cursosDb['id'],$cursosDb['fecha'],$cursosDb['titulo'],$cursosDb['descripcion'],$cursosDb['horario']);
            return $cursos;
        }

        public static function update($cursos)
        {
            $db=Database::getConnect();
            $update=$db->prepare('UPDATE cursos SET fecha=:fecha, titulo=:nombre, descripcion=:descripcion, horario=:horario WHERE id=:id');
            $update->bindValue('nombre', $cursos->getNombre());
            $update->bindValue('descripcion', $cursos->getDescripcion());
            $update->bindValue('horario', $cursos->getHorario());
            $update->bindValue('fecha', $cursos->getFecha());
            $update->bindValue('id', $cursos->getId());
            $update->execute();
        }

    }

?>