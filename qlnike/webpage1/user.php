<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style2.css">
    <?php
      //b1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      //B2.Thực thi câu truy vấn     
      $sql = "select * ";
      $sql  .= "from tbuser";

      $sta =$con -> prepare($sql);
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
    <h1 class="canhgiua">THÔNG TIN NGƯỜI DÙNG</h1>
    <div class="giua">
      <button class="btn btn-primary" onclick="window.open('user_add.php','_selft')">Thêm mới</button>
    </div>
     <table class="table table-striped table-hover" border="1">
        <tr>
            <th>TT</th>
            <th>username</th>
            <th>Password</th>
            <th>Họ Tên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Email</th>
            <th>CMND</th>
            <th>DienThoai</th>
        </tr>
        <?php
      //B4.Hiển thị dữ liệu
      $i =+1;
      foreach ($user as $us){

     ?>
     <tr>
         <td><?=$i;?></td>
         <td><?=$us ->username;?></td>
         <td><?=$us ->Password;?></td>
         <td><?=$us ->Hoten;?></td>
         <td><?=$us ->NgaySinh;?></td>
         <td><?=$us ->Gioitinh;?></td>
         <td><?=$us ->Email;?></td>
         <td><?=$us ->CMND;?></td>
         <td><?=$us ->DienThoai;?></td>
         <td><button class="btn btn-secondary" onclick="window.open('user_update.php?id=<?=$us->user_id?>','_selft')">Cập nhật</button></td>
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