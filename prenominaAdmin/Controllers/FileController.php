<?php
    class FileController
    {
        function __construct()
        {
            
        }
        
        function upload()
        {
            if(isset($_POST['importSubmit']))
            {
                $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
                if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes))
                {
                    if(is_uploaded_file($_FILES['file']['tmp_name']))
                    {
                        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                        fgetcsv($csvFile);
                        while(($line = fgetcsv($csvFile)) !== FALSE)
                        {
                            $id = $line[0];
                            $horas = $line[1];
                            $pago = $line[2];
                            $fecha = $line[3];
                            $empleado_id = $line[4];
                            $file = new File($id, $horas, $pago, $fecha, $empleado_id);
                            File::upload($file);
                            //$this->show(); se dirige al view indicado
                        }
                        fclose($csvFile);
                        $qstring = '?status=succ';
                    }
                    else
                    {
                        $qstring = '?status=err';
                    }
                }
            }
        }
    }


?>