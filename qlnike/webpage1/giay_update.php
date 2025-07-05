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
<?php
      //b1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      $err = "";
      //B3
      if(isset($_GET['id'])){
        $Giay_id = $_GET['id'];
        $sql = "select *";
        $sql  .= "from tbgiay";
        $sql .= " where Giay_id = ?";
        $param = array($Giay_id);
        $sta = $con ->prepare($sql);
        $kq = $sta -> execute($param);
        if($kq){
            $Giay = $sta ->fetch(PDO::FETCH_OBJ);
        }else{
            $err="Không tìm thấy dữ liệu";
        }
    }
    ?>
<body>
    <h1>CẬP NHẬT SẢN PHẨM</h1>
    <div class="canhgiua"> 
        <form name="th_CapNhat_SP" action="giay_update_xuly.php" enctype="multipart/form-data" method="POST">
            <table>
                <tr>
                <td><label class="form-label">Tên Giày: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_TenGiay" id="th_TenGiay" size="30"  value="<?=$Giay -> TenGiay?>">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Mã Số: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_MaSo" id="th_MaSo" size="30" value="<?=$Giay -> MaSo?>">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Số Lượng: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_SoLuong" id="th_SoLuong" size="30" value="<?=$Giay -> SoLuong?>">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Đơn giá: </label> </td>
                    <td>
                        <input class="form-control" type="text" name="th_DonGia" id="th_DonGia" size="30" value="<?=$Giay -> DonGia?>">
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label">Hình ảnh </label></td>
                    <td>
                        <input class="form-control" type="file" name="th_HinhAnh" id="th_HinhAnh" >
                        <input type="hidden" name="th_Hinh" value="<?= $Giay -> HinhAnh?>">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Hướng dẫn bảo quản </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_HDBaoQuan" id="th_HDBaoQuan" value="<?=$Giay -> HDBaoQuan?>">
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Chi Nhánh Sản Xuất </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_HangSX" id="th_HangSX" value=<?=$Giay -> HangSX?>>
                    </td>
                </tr>
                <tr>
                <td><label class="form-label">Mã Loại </label></td>
                    <td>
                        <input class="form-control" type="text" name="th_MaLoai" id="th_MaLoai" value=<?=$Giay -> Maloai?>>
                    </td>
                </tr>
                <tr>
                    <td>
                    <?php
                        //b1. Khái báo đối tượng PDO
                       
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
                    <input type="hidden" name ="th_MaGiay" value ="<?=$lsp->Giay_id?>">
                        <button type="submit" name="th_CapNhat" class="btn btn-success">Cập nhật</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>