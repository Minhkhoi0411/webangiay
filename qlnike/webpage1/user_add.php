<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style2.css"/>
    <title>Thêm Mới Người Dùng</title>
</head>
<?php
      //b1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      //B2.Thực thi câu truy vấn     
      $sql = "select * ";
      $sql  .= "from tbuser";

      $sta =$con -> prepare($sql);
      $kq=$sta -> execute();
      //B3
      if($kq){
        $sp = $sta->fetch(PDO::FETCH_OBJ);
      }
    ?>
<body>
    <h1>Thêm Mới Người Dùng</h1>
    <div class="canhgiua"> 
        <form name="th_Them_User" action="user_add_xuly.php" enctype="multipart/form-data" method="post">
            <table border="1">
                <tr>
                    <td><label class="form-label">Username </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_username" id="th_username" size="30">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Password </label></td>
                    <td>
                        <input class="form-control" type="password" name="th_Password" id="th_Password" size="30">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label"> Họ Tên</label> </td>
                    <td>
                        <input class="form-control" type="text"  name="th_HoTen" id="th_HoTen" size="30">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Ngày Sinh </label> </td>
                    <td>
                        <input class="form-control" type="date"  name="th_NgaySinh" id="th_NgaySinh" size="30">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Giới Tính </label> </td>
                    <td>
                        <input  type="radio" name="th_GioiTinh"  value="1" checked>Nam
                        <input  type="radio" name="th_GioiTinh" value="0">nữ
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Email </label> </td>
                    <td>
                        <input class="form-control" type="email"  name="th_Email" id="th_Email" size="30">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">CMND </label></td>
                    <td>
                        <input class="form-control" type="text"  name="th_CMND" id="th_CMND" size="20">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label"> Điện Thoại</label></td>
                    <td>
                        <input class="form-control" type="text"  name="th_DienThoai" id="th_DienThoai" size="20">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name="th_Luu" class="btn btn-success">Lưu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>