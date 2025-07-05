<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    <?php
      //b1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      //B2.Thực thi câu truy vấn     
      $sql = " select  * ";
      $sql  .= "from tbgiay";

      $sta = $con -> prepare($sql);
      $sta -> execute();
      //B3
      if($sta ->rowCount()>0){
        $user = $sta->fetchAll(PDO::FETCH_OBJ);
      }
    ?>
</head>
<body>
    <div id="trangchu">
      <a href="../webpage1/trangchu.php">Trang Chủ</a>
    </div>
    <h1>THÔNG TIN GIÀY</h1>
    <div class="giua">
      <button class="btn btn-primary" onclick="window.open('giay_add.php','_selft')">Thêm mới</button>
    </div>
     <table border="1" class="table table-striped table-hover">
        <tr class="thead-dark">
            <th>Thứ Tự</th>
            <th>Mã Số</th>
            <th>Tên Giày</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Hướng dẫn bảo quản</th>
            <th>Chi nhánh sản xuất</th>
            <th>Mã Loại</th>
            <th>Hình Ảnh</th>
        </tr>
        <?php
      //B4.Hiển thị dữ liệu
      $i =1;
      foreach ($user as $us){

     ?>
     <tr>
         <td><?=$i;?></td>
         <td><?=$us ->MaSo;?></td>
         <td><?=$us ->TenGiay;?></td>
         <td><?=$us ->DonGia;?></td>
         <td><?=$us ->SoLuong;?></td>
         <td><?=$us ->HDBaoQuan;?></td>
         <td><?=$us ->HangSX;?></td>
         <td><?=$us ->Maloai;?></td>
         <td colspan="1">
         <img class="hinhsp" src="../images/<?=$us ->HinhAnh;?>">
          </td>
         <td><button class="btn btn-secondary" onclick="window.open('giay_update.php?id=<?=$us -> Giay_id;?>','_selft')">Cập nhật</button></td>
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