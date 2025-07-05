<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Cập nhật sản phẩm</title>
</head>
<?php
    include("dbconnect.php");
    $err="";
    if(isset($_GET['id'])){
        $MaLoai = $_GET['id'];
        $sql = "select TenLoai ";
        $sql .= " from tbloaigiay";
        $sql .= " where MaLoai = ?";
        $param = array($MaLoai);
        $sta = $con ->prepare($sql);
        $kq = $sta -> execute($param);
        if($kq){
            $us = $sta ->fetch(PDO::FETCH_OBJ);
        }else{
            $err="Không tìm thấy dữ liệu";
        }
    }
?>
<body>
    <div>
        <h3>CẬP NHẬT LOẠI SẢN PHẨM</h3>
        <div>
            <form name="th_LoaiSP" action="loaigiay_update_xuly.php" enctype="multipart/form-data" method="POST">
                <table>
<tr>
                        <td><label class="form-label">Tên loại: </label></td>
                        <td>
                            <input value="<?=$us->TenLoai?>" class="form-control" type="text" name="th_TenLoai" id="th_TenLoai" size="20">
</td>
</tr>
<tr>
    <td colspan="2" align="center">
    <input type="hidden" name="th_MaLoai" value="<?=$MaLoai;?>">
        <button type="submit" name="th_Capnhat" class="btn btn-success">Cập nhật</button>
</td>
<tr>
</table>
</form>
</div>
</div>
</body>
<?php
$con= NULL;
?>
</html>