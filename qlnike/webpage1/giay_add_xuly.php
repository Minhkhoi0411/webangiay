<?php
    include_once("dbconnect.php");
    //B2
    if(isset($_POST['th_Luu']))
    {
        //Sanpham_id,
        $Giay_id = NULL;
        $MaSo= $_POST['th_MaSo']; 
        $TenGiay= $_POST['th_TenGiay'];
        $DonGia=$_POST['th_DonGia'];
        $Soluong= $_POST['th_SoLuong'];
        $HinhAnh= $_FILES['th_HinhAnh']["error"]==0?$_FILES['th_HinhAnh']['name']:"";
        $HDBaoQuan=$_POST['th_HDBaoQuan'];
        $HangSX= $_POST['th_HangSX']=="on"?:0;
        $Maloai = $_POST['th_MaLoai'];
        
        
        //B3
            $sql = "insert into tbgiay ";
            $sql .= "value(?,?,?,?,?,?,?,?,?)";
        //Khai báo mạng dữ liệu
            $param = array($Giay_id,$MaSo,$TenGiay,$DonGia,$Soluong,$HinhAnh,$HDBaoQuan,$HangSX,$Maloai);
            //Thực thi câu truy vấn
            $sta = $con -> prepare($sql);
            $kq = $sta -> execute($param);

        //Kiểm tra dữ liệu thêm mới
        if($kq)
                {
                    if($HinhAnh !="")
                        {
                            $kt= move_uploaded_file($_FILES['th_HinhAnh']['tmp_name'],"../images/$HinhAnh");
                            if($kt)
                                {
                                    header("Location: giay.php");
                                    exit();
                                }
                                else
                                {
                                    echo "Không upload được hình";
                                }
                        }
                }
                else
                    {
                        echo "Không thêm được dữ liệu";
                    }
        
        //B4.Ngắt kết nối
            $con = NULL;            
        }


?>