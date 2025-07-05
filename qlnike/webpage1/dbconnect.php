
<!-- Tạo kết nối đến CSDL -->
<?php
   try {
        $con = new PDO("mysql:host=localhost;dbname=dbnike",'root',"");
        //echo "Kết nối thành công";
   }
   catch(PDOException $ex){
    echo "Kết nối thất bại";
    die($ex->getMessage());
   }
?>