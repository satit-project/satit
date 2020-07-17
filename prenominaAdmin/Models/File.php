<?php
    class File
    {
        private $id;
        private $horas;
        private $pago;
        private $empleado_id;
        private $fecha;

        function __construct($id, $horas, $pago, $fecha, $empleado_id)
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
            $import=$db->prepare("INSERT into prenomina(id, horas, pago, fecha, empleado_id) values(:id, :horas, :pago, :fecha, :empleaod_id)");
            $import->bindValue('id', $file->getId());
            $import->bindValue('horas', $file->getHoras());
            $import->bindValue('pago', $file->getPago());
            $import->bindValue('fecha', $file->getFecha());
            $import->bindValue('empleado_id', $file->getEmpleadoId());
            $import->execute();
        }
    }


?>