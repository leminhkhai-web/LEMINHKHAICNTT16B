<?php
session_start();

if (!isset($_SESSION['USER']) and !isset($_SESSION['ADMIN'])) {
    // header('location: administrator/userlogin.php');
    // header('location: administrator/userlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./public_file/pmycss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="wrapper">
        

        <div class="header">
            <div class="wrapper-search">
                <div class="icon-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm" >
                </div>
            </div>
            <div class="wrapper-account">
                <div class="wrapper-login account">
                    <a style="text-decoration: none"  class="login-header"  href="administrator/userLogin.php"> Đăng nhập</a>
                </div>
                <div class="wrapper-register account">
                    <a  style="text-decoration: none" class="register" href="./administrator/register.php"> Đăng ký</a>
                </div>
            </div>
        </div>
        
        <div class="wrapper-ui-product ">

            <div class="lvTwo">
                <?php
                require './apart/menuLoaihang.php';
                ?>
            </div>
        
            <div class="lvThree">
                <?php
                if (!isset($_REQUEST['reqHanghoa'])) {
                    require './apart/viewListLoaiHang.php';
                }
                else {
                    require './apart/viewHangHoa.php';
                }
                ?>
            </div>
        </div>
        
    </div>

</body>
</html>