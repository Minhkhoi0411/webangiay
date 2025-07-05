<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Trang chủ</title>
</head>

<body>
    <header>
        <a href="trangchu.php" class="Sneaker">Sneaker Store</a>
        <div class="menu">
            <a href="trangchu.php">Trang Chủ</a>
            <a href="gioithieu.php">Giới Thiệu</a>
            <a href="#">Dịch Vụ</a>
            <a href="#">Liên Hệ</a>
            <a href="../logout.php">Đăng Xuất</a>
        </div>
    </header>
    <section class="section-main">
        <h1>Sneaker Store</h1>
    </section>
    <section class="section-two">
        <a href="loaigiay.php"><h2>Loại Giày</h2></a>
        <a href="giay.php"><h2>Giày</h2></a>
        <a href="khachhang.php"><h2>khách hàng</h2></a>
        <a href="giohang.php"><h2>Giỏ hàng</h2></a>
        <a href="user.php"><h2>Người Dùng</h2></a>

    </section>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle('sticky', window.scrollY > 0);
        });
    </script>
    <div>

    </div>
</body>

</html>