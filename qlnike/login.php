<?php
    session_start();
    //Kết nối CSDL
    include("webpage1/dbconnect.php");
    //Lấy thông tin người dùng từ form
    if(isset($_POST['th_tendn']) && isset($_POST['th_mk'])){
        $uname = $_POST['th_tendn'];
        $pass = $_POST['th_mk'];
        if(empty($uname)){
            header("location: index.php?tendn= Chưa nhập tên đăng nhập.");
            exit();
        }else if(empty($pass)){
            header("location: index.php?mk= Chưa nhập mật khẩu.");
            exit();
        }else{
            //Xây dựng câu truy vấn
            $sql = "select user_id, username, password, Hoten ";
            $sql .= " from tbuser";
            $sql .= " where username= ? and password = ?";
            $param = array($uname, $pass);
            $sta = $con -> prepare($sql);
            $kq = $sta -> execute($param);
            if($kq){
                $ur = $sta -> fetch(PDO::FETCH_OBJ);
                $_SESSION['username']= $ur->username;
                $_SESSION['pass']= $ur->password;
                $_SESSION['Hoten']= $ur->Hoten;
                header("location: webpage1/trangchu.php");
                exit();
            }else{
                header("location: index.php?err=Chưa nhập tên đăng nhập/mật khẩu.");
                exit();
            }
        }
    }




?>