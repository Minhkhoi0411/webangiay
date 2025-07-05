<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin Loại sản phẩm</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    <?php
      //B1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      //B2.Thực thi câu truy vấn     
      $sql = "select MaLoai, TenLoai ";
      $sql  .= "from tbloaigiay";

      $sta =$con -> prepare($sql);
      $sta -> execute();
      //B3
      if($sta ->rowCount()>0){
        $loaigiay = $sta->fetchAll(PDO::FETCH_OBJ);
      }
    ?>
</head>
<body>
    <div id="trangchu">
      <a href="../webpage1/trangchu.php">Trang Chủ</a>
    </div>
    <h1>THÔNG TIN LOẠI SẢN PHẨM</h1>
    <div class="giua">
      <button class="btn btn-primary" onclick="window.open('loaigiay_add.php','_selft')">Thêm mới</button>
    </div>
     <table class="table table-striped table-hover">
        <tr class="thead-dark">
            <th>Thứ Tự</th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
        </tr>
        <?php
      //B4.Hiển thị dữ liệu
      $i =1;
      foreach ($loaigiay as $lg){

     ?>
     <tr>
         <td><?=$i;?></td>
         <td><?=$lg ->MaLoai;?></td>
         <td><?=$lg ->TenLoai;?></td>
         <td><button class="btn btn-secondary" onclick="window.open('loaigiay_update.php?id=<?=$lg->MaLoai?>','_selft')">Cập nhật</button></td>
         <td><button class="btn btn-danger">Xóa</button></td>
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