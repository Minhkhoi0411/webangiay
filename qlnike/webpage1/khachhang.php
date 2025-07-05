<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách Hàng</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/trangchu2.css">
    <?php
      //b1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      //B2.Thực thi câu truy vấn     
      $sql = "select HoTen, SoDT, DiaChi ";
      $sql  .= "from tbkhachhang";

      $sta =$con -> prepare($sql);
      $sta -> execute();
      //B3
      if($sta ->rowCount()>0){
        $user = $sta->fetchAll(PDO::FETCH_OBJ);
      }
    ?>
    </div>
    <h1>THÔNG TIN KHÁCH HÀNG</h1>
     <table class="table table-striped table-hover">
        <tr class="thead-dark">
            <th>Mã khách hàng</th>
            <th>Họ Tên</th>
            <th>Điện thoại</th>
            <th>Địa Chỉ</th>
        </tr>
        <?php
      //B4.Hiển thị dữ liệu
      $i =1;
      foreach ($user as $us){

     ?>
     <tr>
         <td><?=$i;?></td>
         <td><?=$us ->HoTen;?></td>
         <td><?=$us ->SoDT;?></td>
         <td><?=$us ->DiaChi;?></td>
    </tr>
    <?php
    $i +=1;
      }
    ?>
    </table>
</body>
     <?php
         $con = NULL;
     ?>
</html>