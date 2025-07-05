<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Trang Sản Phẩm</title>
    <link href="../css/giohang.css" rel="stylesheet">
    <link href="../css/linktrangchu.css" rel="stylesheet">
    
</head>
<?php
      //b1. Khái báo đối tượng PDO
      include_once("dbconnect.php");
      //B2.Thực thi câu truy vấn     
      $sql = "select *";
      $sql  .= "from tbgiay";
      $sta =$con -> prepare($sql);
      $sta -> execute();
      if($sta ->rowCount()>0){
        $spham = $sta->fetchAll(PDO::FETCH_ASSOC);
        //Phân tích sản phẩm
        //B1. Tính tổng sản phẩm
            $tongsp = count($spham);
        //B2. Xác định số sản phẩm trang
            $sp_trang = !empty($_GET['per_trang'])?$_GET['per_trang']:4;
        //B3. xác định trang hiện tại, tổng số trang
            $tranght = !empty($_GET['trang'])?$_GET['trang']:1;
            $tongtrang = ceil($tongsp/$sp_trang);

        //B4. Xác định vị trí bắt đầu của sản phẩm
        //có 4sp/trang;có 5 trang
            $vtbd = ($tranght -1)*$sp_trang;
        //Xây dựng câu truy vấn đọc sp theo số trang

            $sql = "select *";
            $sql .= "from tbgiay";
            $sql .= " limit ".$vtbd . "," .$sp_trang;
            $sta = $con -> prepare($sql);
            $sta -> execute();
            $spham = $sta ->fetchAll(PDO::FETCH_OBJ);
      }
    ?>
<body>
    <div id="trangchu">    
      <a href="../webpage1/trangchu.php">Trang Chủ</a>
    </div>  
<div class="TieuDe">DANH MỤC SẢN PHẨM</div> 
<div id="main">       
         <?php
            foreach($spham as $sp){
         ?>
        <div class="spham">           
                <div class="hinhsp">
                    <img src="../images/<?=$sp->HinhAnh?>" class="imgsp">                       
                </div>
                <div class="khgiay pad">Mã Giày: <span class="chudamxanh"><?=$sp->MaSo?></span>  </div>
                <div class="tengiay pad">Tên Giày: <?=$sp->TenGiay?> </div>                    
                <div class="soluong pad">Số Lượng: <?=$sp->SoLuong?> </div>
                <div class="dongia pad">Giá: <?= number_format($sp->DonGia,0,",",".")?> vnđ. </div>
                <div>
                    <?php   
                        $tam = $sp->SoLuong;
                        if($tam > 0){
                            echo "còn hàng.";
                        }
                        else{
                            echo "hết hàng.";
                        }
                    ?>
                </div>
                <div class="muangay pad">
                    <a class="muasp" href="giay_ct.php?id=<?=$sp -> Giay_id; ?>">Mua ngay</a>
                </div>                   
        </div>
        <?php
            }
        ?>
         <div class="phantrang">
            <?php
                //Trang đầu tiên
                if($tranght>3)
                {
                    $f_page = 1;
                
            ?>
                <a class="page-item" href="?per_trang=<?=$sp_trang?>&trang=<?= $f_page?>">Trước</a>
            <?php
                }
            //trang kế trước
                if($tranght>3){
                    $p_page = $tranght-1
            ?>
                <a class="page-item" href="?per_trang=<?=$sp_trang?>&trang=<?= $p_page?>">Kế trước</a>
            <?php
                }
                    for($so=1; $so<=$tongtrang; $so++){
                        if($so != $tranght){
                            if($so>$tranght-3 && $so<$tranght +3){
            ?>
                    <a class="page-item" href="?per_trang=<?=$sp_trang?>&trang=<?= $so?>"><?= $so?></a>
            
            <?php
                            
                        }
            ?>
            <?php
                }
                else{
                    //Trang hiện tại
            ?>
                <span class="current-page page-item chudam"><?= $so?></span>
            <?php
                }
            }
                //trang kế tiếp
                if( $tranght<$tongtrang -3){
                    $n_page = $tranght +1;
                
            ?>
                <a class="page-item" href="?per_trang=<?=$sp_trang?>&trang=<?= $n_page?>">Kế cuối</a>
            <?php
                }
                if($tranght < $tongtrang-3){
                    $l_page = $tongtrang;  
            ?>
                <a class="page-item" href="?per_trang=<?=$sp_trang?>&trang=<?= $l_page?>">Cuối</a>
            
            <?php
                }
            ?>
         
         </div>   
    </div>
    
</body>
    <?php
         $con = NULL;
    ?>            
</html>