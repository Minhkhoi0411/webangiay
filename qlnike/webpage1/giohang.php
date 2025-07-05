
<html>
<head>    
    <title>Gio hang</title>
    <link href="../css/giohang1.css" rel="stylesheet" type="text/css">

</head>


<body>
    <div id="main_giohang">
       
        <div class="trangchu"><a href="giayphantrang.php">Sản phẩm</a></div>
        <h2>Giỏ hàng</h2>
        <div id="giohang">
            <form action="" method="post">
                <div id="spham">
                <table id="tb_spham" border="1">
                    <tr id="hg_tieude">
                        <th>TT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phảm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá<br> <span class="vnd"> (vnđ)</span></th>
                        <th>Thành tiền<br> <span class="vnd">(vnđ)</span></th>
                        <th>Xóa</th>
                    </tr>
                  
                    <tr>
                        <td class="canhgiua">tt</td>
                        <td class="TenSP">Ten Giày</td>
                        <td class="canhgiua"><img src="../images/nike5.jpg" class="hinhsp"></td>
                        <td class="canhgiua">
                            <div class="giua_o">
                            <input type="text"  size="10" class="soluong">
                            </div>
                        </td>
                        <td class="canhphai chudo">DonGia</td>
                        <td class="canhphai">thanhtien</td>
                        <td class="canhgiua"><a href="" class="btn btn-danger">Xóa</a></td>
                    </tr>  
                    
                          
                    <tr id="tongtien">
                        <td colspan="5" class="canhgiua">Tổng tiền</td>
                        <td class="canhphai">tongtien</td>
                        <td>&nbsp;</td>
                       
                    </tr>
                 
                </table>
                </div>
                <div id="capnhat">
                    <button type="submit" name="th_CapNhat" class="btn btn-primary">Cập nhật</button>
                </div>
                <div id="khachhang">
                    <table id="tt_KH">
                        <tr>
                            <td class="canhphai">Khách hàng:</td>
                            <td><input type="text" name="th_TenKH" id="th_TenKH" size="30"></td>
                        </tr>                        
                        <tr>
                            <td class="canhphai">Số điện thoại:</td>
                            <td><input type="text" name="th_SoDT" id="th_SoDT" size="30"></td>
                        </tr>
                        <tr>
                            <td class="canhphai">Địa chỉ:</td>
                            <td><input type="text" name="th_DiaChi" id="th_DiaChi" size="70"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" name="th_DatHang"  class="btn btn-warning" style="margin-top:20px;">Đặt hàng</button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
       
    </div>
</body>

</html>