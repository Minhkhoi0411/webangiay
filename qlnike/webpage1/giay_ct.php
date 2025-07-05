<!DOCTYPE html>

<html>
<head>    
    <title>Gio hang</title>
    <link href="../css/giayct.css" rel="stylesheet" type="text/css">

</head>
<?php 
include_once("dbconnect.php");

if(isset($_GET['id'])){
    $Giay_id = $_GET['id'];

    $sql = "select * from tbgiay";
    $sql .=" where Giay_id =". $Giay_id;

    $sta =$con -> prepare($sql);
    $sta -> execute();
    $sp = $sta ->fetch(PDO::FETCH_OBJ);

?>
<body>
    <div id="main_spct">       
        <h2>Chi tiết sản phẩm</h2>
        <form action="" method="post">
        <div id="sp_chitiet">
            <div id="khunghinh">
                <img src="../images/<?=$sp->HinhAnh?>" alt="" id="hinh_sp">
                <div class="chudam pad-top">Mã hàng: <?=$sp->MaSo?> </div> 
            </div>
            <div id="ttsp">
                <div class="chudam pad tensp"><?=$sp->TenGiay?> </div>          
                <div class="pad">Số Lượng: <span class="mauxanh"><?=$sp -> SoLuong?></span></div>
                <div class="pad">Giá: <span class="chudam maudo"><?=number_format($sp->DonGia,0,".","," )?></span> vnđ. </div>
                <div class="pad"><input type="text" id="th_soluong" value="1" size="2"></div>
                <div class="pad"><button type="submit" name="th_Mua" class="btn btn-primary">Mua sản phẩm</button>
                       
                    </div>
            </div>
        </div>
        </form>
    </div>
    
</body>
<?php
}
    $conn = NULL;
?>
</html>