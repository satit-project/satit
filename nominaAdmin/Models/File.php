<?php
    class File
    {
        private $id;
        private $horas;
        private $pago;
        private $bono;
        private $empleado_id;
        private $fecha;

        function __construct($id, $horas, $pago, $bono, $empleado_id, $fecha)
        {
            $this->setId($id);
            $this->setHoras($horas);
            $this->setPago($pago);
            $this->setBono($bono);
            $this->setEmpleadoId($empleado_id);
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

        public function getHoras()
        {
            return $this->horas;
        }
        public function setHoras($horas)
        {
            $this->horas = $horas;
        }

        public function getPago()
        {
            return $this->pago;
        }
        public function setPago($pago)
        {
            $this->pago = $pago;
        }

        public function getBono()
        {
            return $this->bono;
        }
        public function setBono($bono)
        {
            $this->bono = $bono;
        }

        public function getEmpleadoId()
        {
            return $this->empleado_id;
        }
        public function setEmpleadoId($empleado_id)
        {
            $this->empleado_id = $empleado_id;
        }

        public function getFecha()
        {
            return $this->fecha;
        }
        public function setFecha($fecha)
        {
            $this->fecha = $fecha;
        }

        public static function upload($file)
        {
            $db=Database::getConnect();
            $import=$db->prepare("INSERT into nomina(id, horas, pago, bono, empleado_id, fecha) values(:id, :horas, :pago, :bono, :empleado_id, :fecha)");
            $import->bindValue('id', $file->getId());
            $import->bindValue('horas', $file->getHoras());
            $import->bindValue('pago', $file->getPago());
            $import->bindValue('bono', $file->getBono());
            $import->bindValue('empleado_id', $file->getEmpleadoId());
            $import->bindValue('fecha', $file->getFecha());
            $import->execute();
        }
    }


?>