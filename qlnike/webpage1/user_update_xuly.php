<?php
    //B1: Kết nối CSDL
    include("dbconnect.php");
    //B2: Lấy thông tin loại sản phẩm (nhận dữ liệu từ Form)
    if(isset($_POST['th_CapNhat'])){
        $user_id = $_POST['th_MaUser'];
        $username = $_POST['th_Username'];
        $Password = $_POST['th_Password'];
        $HoTen = $_POST['th_HoTen'];
        $NgaySinh = $_POST['th_NgaySinh'];
        $GioiTinh = $_POST['th_GioiTinh'];
        $Email = $_POST['th_Email'];
        $CMND = $_POST['th_CMND'];
        $DienThoai = $_POST['th_DienThoai'];
    //B3: Xây dựng cấu truy vấn cập nhật
        $sql = "update tbuser";
        $sql .= " set Username = ?, Password = ?, HoTen = ?, NgaySinh = ?, GioiTinh = ?, Email = ?, CMND = ?, DienThoai = ?";
        $sql .= " where user_id = ?";
        
        $param = array($username, $Password, $HoTen, $NgaySinh, $GioiTinh, $Email, $CMND, $DienThoai, $user_id);
        //B4: Thực thi câu truy vấn
        $sta = $con -> prepare($sql);
        $kq = $sta -> execute($param);
    //B5: Kiểm tra đã cập nhật --> cập nhật hình
    if($kq){
        header("Location: user.php");
        exit();
    }
    else{
        echo "Không thêm được dữ liệu";
    }
}
    //Ngắt kết nối 
    $con = NULL;
 ?>