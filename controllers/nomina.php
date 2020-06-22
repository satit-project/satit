<?php
require 'vendor/autoload.php';
require_once 'controllers/myreadfilter.php';
use PhpOffice\PhpSpreadsheet\Reader\Xls;

class Nomina extends Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    function render() {
        $this->view->message="";
        $this->view->render('nomina/index');
    }
    
    function readFile(){
        $this->model->update();
    }
    
    function checkUpload() {
        if(isset($_FILES["fileExcel"])) {
        }else {
            $this->view->message = "<br> No se a seleccionado archivo";
        }
        
    }
    
    function chekFileType()
    {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        if( false === $ext = array_search(
            $finfo->file($_FILES['fileExcel']['tmp_name']),
            array(
                'xls' => 'application/vnd.ms-exce',
                'xlt' => 'application/vnd.ms-excel',
                'xla' => 'application/vnd.ms-excel',
                'xlsx'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            ),
            true
        )){
            throw new RuntimeException('Invalid file Format.');
        }
    }
}

?>