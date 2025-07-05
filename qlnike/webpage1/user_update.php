<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cập nhật người dùng</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <?php
include("dbconnect.php");
    //B2: Lấy thông tin từ San 
    $err = "";
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
    //B3: Xây dựng câu truy vấn SELECT
        $sql = "select * ";
        $sql .= "from tbuser ";
        $sql .= "where user_id = ?";

        $param = array($user_id);
    //B4: Thực thi
        $sta = $con -> prepare($sql);
        $kq = $sta -> execute($param);
        if($kq){
            $us = $sta -> fetch(PDO::FETCH_OBJ);
        }
        else{
            $err="Không tìm thấy dữ liệu";
        }
    }
    ?>
    <div>
        <h1>CẬP NHẬT NGƯỜI DÙNG</h1>
        <div class="canhgiua">
            <form name="th_DS_User" action="user_update_xuly.php" method="post" enctype="multipart/form-data">
                <table border="1">
                <tr>
                        <th><label class="form-label">Username </label></th>
                        <th>
                            <input class="form-control" type="text" name="th_Username" id="th_Username" size="20" value="<?=$us->username?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label class="form-label">Password </label></th>
                        <th>
                            <input class="form-control" type="password" name="th_Password" id="th_Password" size="20" value="<?=$us->Password?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label class="form-label">Họ tên: </label></th>
                        <th>
                            <input class="form-control" type="text" name="th_HoTen" id="th_HoTen" size="20" value="<?=$us->Hoten?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label class="form-label">Ngày sinh: </label></th>
                        <th>
                            <input class="form-control" type="date" name="th_NgaySinh" id="th_NgaySinh" size="20" value="<?=$us->NgaySinh?>">
                        </th>
                    </tr>
                    <tr>
                        <th><label class="form-label">Giới tính: </label></th>
                        <td>
                            <input type="radio" name="th_GioiTinh" id="th_GioiTinh" size="30" value="<?=$us->GioiTinh?>" checked>Nam
                            <input type="radio" name="th_GioiTinh" id="th_GioiTinh" size="30" value="<?=$us->GioiTinh?>">Nữ
                        </td>
                    </tr>
                    <tr>
                        <th><label class="form-label">Email: </label></th>
                        <th><input class="form-control" type="email" name="th_Email" size="30" id="th_Email" value="<?=$us->Email?>"></th>
                    </tr>
                    <tr>
                        <th><label class="form-label">Số CMND: </label></th>
                        <th><input class="form-control" type="password" name="th_CMND" id="th_CMND" size="30" value="<?=$us->CMND?>"></th>
                    </tr>
                    <tr>
                        <th><label class="form-label">Điện Thoại: </label></th>
                        <th><input class="form-control" type="number" name="th_DienThoai" id="th_DienThoai" size="30" value="<?=$us->DienThoai?>"></th>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                        <input type="hidden" name="th_MaUser" value="<?=$user_id;?>">
                            <button type="submit" name="th_CapNhat" class="btn btn-success">Cập Nhật</button>
                        <td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>