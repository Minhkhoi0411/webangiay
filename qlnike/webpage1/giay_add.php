<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style1.css"/>
    <title>Thêm Mới Sản Phẩm</title>
</head>
<body>
    <h1>THÊM MỚI SẢN PHẨM</h1>
    <div class="canhgiua"> 
        <form name="th_Them_SP" action="giay_add_xuly.php" enctype="multipart/form-data" method="post">
            <table>
                <tr>
                     <td><label class="form-label">Mã Số: </label> </td>
                    <td>
                        <input class="form-control" type="number" name="th_MaSo" id="th_MaSo" size="30">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Tên Giày: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_TenGiay" id="th_TenGiay" size="30">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Số Lượng: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_SoLuong" id="th_SoLuong" size="30">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Đơn giá: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_DonGia" id="th_DonGia" size="30">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Hình ảnh </label></td>
                    <td>
                        <input class="form-control" type="file" name="th_HinhAnh" id="th_HinhAnh">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Hướng dẫn bảo quản </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_HDBaoQuan" id="th_HDBaoQuan">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label"> Chi Nhánh Sản Xuất </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_HangSX" id="th_HangSX">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Mã Loại </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_MaLoai" id="th_MaLoai">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Loại sản phẩm: </label> </td>
                    <td>
                    <?php
                        //b1. Khái báo đối tượng PDO
                        include_once("dbconnect.php");
                        //B2.Thực thi câu truy vấn     
                        $sql = "select MaLoai, TenLoai";
                        $sql  .= " from tbloaigiay";

                        $sta =$con -> prepare($sql);
                        $sta -> execute();
                        //B3
                        if($sta ->rowCount()>0){
                            $loaisp = $sta->fetchAll(PDO::FETCH_OBJ);
                        }
                
                    ?>
                    <select name="th_MaLoai">
                        <?php
                            foreach ($loaisp as $lsp){
                        ?>
                        <option value="<?=$lsp->MaLoai?>"><?=$lsp->TenLoai?></option>
                      <?php
                        }
                        $con = NULL;
                      ?>
                    </select>
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