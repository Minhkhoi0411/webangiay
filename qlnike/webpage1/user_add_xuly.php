<?php
    include_once("dbconnect.php");
    //B2
    if(isset($_POST['th_Luu']))
    {
        //Sanpham_id,
        $user_id = NULL;
        $username= $_POST['th_username'];
        $Password= $_POST['th_Password'];
        $Hoten= $_POST['th_HoTen'];
        $NgaySinh=$_POST['th_NgaySinh'];
        $GioiTinh=$_POST['th_GioiTinh'];
        $Email= $_POST['th_Email'];
        $CMND = $_POST['th_CMND'];
        $DienThoai= $_POST['th_DienThoai'];
       
        //B3
            $sql = "insert into tbuser values(?,?,?,?,?,?,?,?,?)";
        //Khai báo mạng dữ liệu
            $param = array($user_id,$username,$Password,$Hoten,$NgaySinh,$GioiTinh,$Email,$CMND,$DienThoai);
            //Thực thi câu truy vấn
            $sta = $con -> prepare($sql);
            $kq = $sta -> execute($param);

        //Kiểm tra dữ liệu thêm mới
        if($kq)
        {   
            header("Location:user.php");
        exit();
        }
        
        else
            {
                echo "Không thêm được dữ liệu";
            }
        }
        header("Location:user.php");
        exit();
        //B4.Ngắt kết nối
            $con = NULL;            


?>