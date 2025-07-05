
<?php
    //B1: Kết nối CSDL
    include("dbconnect.php");
    //B2: Lấy thông tin loại sản phẩm (nhận dữ liệu từ Form)
    if(isset($_POST['th_CapNhat'])){
        $Giay_id = $_POST['th_MaGiay'] ;
        $TenGiay= $_POST['th_TenGiay'];
        $MaSo= $_POST['th_MaSo']; 
        $Soluong= $_POST['th_SoLuong'];
        $DonGia=$_POST['th_DonGia'];
        $HinhAnh= $_FILES['th_HinhAnh']["error"]==0?$_FILES['th_HinhAnh']['name']:"";
        $HDBaoQuan=$_POST['th_HDBaoQuan'];
        $HangSX= $_POST['th_HangSX'];
        $Maloai = $_POST['th_MaLoai'];
        $sql = "update tbgiay ";
        $sql .= "set TenGiay =?,MaSo =?,SoLuong =?,DonGia =?, HinhAnh = ?,HDBaoQuan = ?,HangSX =?,MaLoai = ?";
        $sql .= "where Giay_id =?";
        $flag= 0;
        if($HinhAnh ==""){
            $HinhAnh = $_POST['th_Hinh'];
            $flag= 1;
        }
        $param = array($TenGiay,$MaSo,$Soluong,$DonGia,$HinhAnh,$HDBaoQuan,$HangSX,$Maloai,$Giay_id);
        $sta = $con ->prepare($sql);
        $kq = $sta ->execute($param);
    //B5: Kiểm tra đã cập nhật --> cập nhật hình-
        if($kq){
            if($HinhAnh != ""){
                if($flag == 0){
                    $kt = move_uploaded_file($_FILES['th_HinhAnh']['tmp_name'],"../images/$HinhAnh");
                    if($kq){
                        //Cập nhật được hình
                        header("Location: giay.php");
                        exit();
                    }else{
                        echo "Upload không thành công";
                    }
                }else{
                    //Cập nhật được dữ liệu
                    header("Location: giay.php");
                        exit();
                }
            }else{
                echo "Lỗi cập nhật hình";
            }
        }else{
            echo "Lỗi cập nhật";
        } 
    }
    //Ngắt kết nối 
    $con = NULL;
 ?>