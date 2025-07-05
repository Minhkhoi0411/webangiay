<?php
    include("dbconnect.php");
    if(isset($_POST['th_Capnhat'])){
        $MaLoai= $_POST['th_MaLoai'];
        $TenLoai= $_POST['th_TenLoai'];
        $sql = "update tbloaigiay ";
        $sql .= "set TenLoai =? ";
        $sql .= "where MaLoai =?";
        $flag= 0;
        $param = array($TenLoai, $MaLoai);
        $sta = $con ->prepare($sql);
        $kq = $sta ->execute($param);
        if($kq){
            
                    if($kq){
                        header("location: loaigiay.php");
                        exit(); 
                }
            
        }else{
            echo "lỗi cập nhật";
        }
    } 
