<?php
    //B1. Kết nối CSDL
        include("dbconnect.php");
    //B2. Lấy dữ liệu từ Form
    if(isset($_POST['th_Luu']))
        {
            $MaLoai=$_POST['th_MaLoai'];
            $TenLoai=$_POST['th_TenLoai'];
            //$bien=BTDK?GiaTri1:GiaTri2l;

            //Khai báo mảng chứa tham số
            $param = array($MaLoai, $TenLoai);
            //B3. Thêm Dữ liệu
            //xây dựng câu truy vấn
            $sql="insert into tbloaigiay value(?,?)";
            //Thực thi câu truy vấn
            $sta=$con ->prepare($sql);
            $kq=$sta -> execute($param);

            //Kiểm tra dữ liệu thêm mới
            if($kq)
                {
                    
                                {
                                    header("Location: loaigiay.php");
                                    exit();
                                }
                }
                else
                    {
                        echo "Không thêm được dữ liệu";
                    }
        //B4. Ngắt kết nối
                $con=NULL;
        }
?>