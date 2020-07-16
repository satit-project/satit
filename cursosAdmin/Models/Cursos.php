<?php
    class Cursos
    {
        private $id;
        private $nombre;
        private $descripcion;
        private $horario;
        private $fecha;
        private $estatus;

        function __construct($id, $nombre, $descripcion, $horario, $fecha, $estatus)
        {
            $this->setId($id);
            $this->setNombre($nombre);
            $this->setDescripcion($descripcion);
            $this->setHorario($horario);
            $this->setFecha($fecha);
            $this->setEstatus($estatus);
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

        public function getEstatus()
        {
            return $this->estatus;
        }
        public function setEstatus($estatus)
        {
            if(strcmp($estatus, 'on') == 0)
            {
                $this->estatus=1;
            }
            elseif(strcmp($estatus, '1') == 0)
            {
                $this->estatus='checked';
            }
            elseif(strcmp($estatus,'0')==0)
            {
                $this->estatus='of';
            }
            else
            {
                $this->estatus=0;
            }
        }
        
        public static function save($cursos)
        {
            $db=Database::getConnect();
            $insert=$db->prepare('INSERT INTO cursos VALUES(NULL, :nombre, :descripcion, :horario, :fecha, :estatus)');
            $insert->bindValue('nombre', $cursos->getNombre());
            $insert->bindValue('descripcion', $cursos->getDescripcion());
            $insert->bindValue('horario', $cursos->getHorario());
            $insert->bindValue('fecha', $cursos->getFecha());
            $insert->bindValue('estatus', $cursos->getEstatus());
            $insert->execute();
        }

        public static function all()
        {
            $db = Database::getConnect();
            $listaCursos=[];
            $select = $db->query('SELECT * FROM cursos');
            foreach($select->fetchAll() as $cursos)
            {
                $listaCursos[]=new Cursos($cursos['id'],$cursos['titulo'],$cursos['descripcion'],$cursos['horario'],$cursos['fecha'],$cursos['estatus_curso']);
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
            $cursos=new Cursos($cursosDb['id'],$cursosDb['titulo'],$cursosDb['descripcion'],$cursosDb['horario'],$cursosDb['fecha'],$cursosDb['estatus_curso']);
            return $cursos;
        }

        public static function update($cursos)
        {
            $db=Database::getConnect();
            $update=$db->prepare('UPDATE cursos SET titulo=:nombre, descripcion=:descripcion, horario=:horario, fecha=:fecha, estatus_curso=:estatus WHERE id=:id');
            $update->bindValue('nombre', $cursos->getNombre());
            $update->bindValue('descripcion', $cursos->getDescripcion());
            $update->bindValue('horario', $cursos->getHorario());
            $update->bindValue('fecha', $cursos->getFecha());
            $update->bindValue('estatus', $cursos->getEstatus());
            $update->bindValue('id', $cursos->getId());
            $update->execute();
        }

        public static function delete($id)
        {
            $db=Database::getConnect();
            $delete=$db->prepare('UPDATE cursos SET estatus_curso=0 WHERE id=:id');
            $delete->bindValue('id', $id);
            $delete->execute();
        }
    }

?>