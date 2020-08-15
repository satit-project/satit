<?php
    class Material
    {
        private $id;
        private $empleadoid;
        private $materialid;
        private $fecha;
        private $status;

        function __construct($id, $empleadoid, $materialid, $fecha, $status)
        {
            $this->setId($id);
            $this->setEmpleadoId($empleadoid);
            $this->setMaterialId($materialid);
            $this->setFecha($fecha);
            $this->setStatus($status);
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

        public function getMaterialId()
        {
            return $this->materialid;
        }
        public function setMaterialId($materialid)
        {
            $this->materialid = $materialid;
        }

        public function getEmpleadoId()
        {
            return $this->empleadoid;
        }
        public function setEmpleadoId($empleadoid)
        {
            $this->empleadoid = $empleadoid;
        }

        public function getStatus()
        {
            return $this->status;
        }
        public function setStatus($status)
        {
            $this->status = $status;
        }

        public static function all()
        {
            $db = Database::getConnect();
            $listaMaterial=[];
            $select = $db->query('SELECT * FROM material_request');
            foreach($select->fetchAll() as $material)
            {
                $listaMaterial[]=new Material($material['id'],$material['employeeID'],$material['materialID'],$material['dateRequest'], $material['status']);
            }
            return $listaMaterial;
        }

        public static function searchById($id)
        {
            $db = Database::getConnect();
            $select=$db->prepare('SELECT * FROM material_request WHERE id=:id');
            $select->bindValue('id', $id);
            $select->execute();
            $materialDb=$select->fetch();
            $material=new Material($materialDb['id'],$materialDb['employeeID'],$materialDb['materialID'],$materialDb['dateRequest'], $materialDb['status']);
            return $material;
        }

        public static function delete($id)
        {
            $db=Database::getConnect();
            $delete=$db->prepare('DELETE FROM material_request WHERE id=:id');
            $delete->bindValue('id', $id);
            $delete->execute();
        }
    }

?>