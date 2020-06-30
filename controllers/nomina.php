<?php

class Nomina extends Controller {

    function __construct(){
        parent::__construct();
        $this->view->uploadedFile="";
    }

    function render() {
        $this->view->render('nomina/index');
    }


    public function upload() {
      echo "upload working";
    if( isset($_FILES['nominaForm']) && isset($_POST['submit']))
    {
      $name= basename($_FILES['nominaForm']['name']);
      $extension=explode('.',$name);
      if( $extension[count($extension)-1]=='csv' || $extension[count($extension)-1]=='xls')
        {
          $localPath = constant('URL');
          $target_path =  "uploads/";
          $target_location = $target_path .basename($_FILES['nominaForm']['name']);
          $_SESSION['target_location'] = $target_location;
          move_uploaded_file($_FILES["nominaForm"]["tmp_name"],$target_location);
          return $uploadedStatus=1;
        }

    }else {
            echo "Error uploading";
          return $uploadedStatus=0;
            }
    }

    public function displayFile(){
      $row = 1;
      if (($handle = fopen("uploads/NominaEjemplo.csv", "r")) !== FALSE) {
        echo "<table>";
        echo"<thead class='table'>";

          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              $num = count($data);
              $row++;
              echo "<tr>";
              for ($c=0; $c < $num; $c++) {
                    echo "<td>".$data[$c] . "</td>";
              }
              echo "<tr>";
          }

          fclose($handle);

          echo "</table>";
      }

    }
}

?>
