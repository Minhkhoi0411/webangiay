<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style1.css">

</head>
<body>
    <div>
        <h3 class="canhgiua">THÊM MỚI LOẠI SẢN PHẨM</h3>
        <div class="canhgiua">
            <form name="th_LoaiSP" action="loaigiay_add_xuly.php" method="post" enctype="multipart/form-data">
                <table class="t1">
                    <tr>
                        <td>Mã loại: </td>
                        <td>
                            <input class="form-control" type="text" name="th_MaLoai" id="th_MaLoai" size="20">
                        </td>
                    </tr>
                    <tr>
                        <td>Tên loại: </td>
                        <td>
                        <input class="form-control" type="text" name="th_TenLoai" id="th_TenLoai" size="20">
                        </td>
                    <tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit" name="th_Luu" class="btn btn-success">Lưu</button>    
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>