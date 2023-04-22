<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../administrator/stylescss_LMK/Register.css">
    
</head>
<body>
    <div class="register">
        <div class="register-header">
           <p>Trang Đăng ký</p>  
        </div>
        <form class="form-register" name="newuser" id="formreg" method="post"
            action="./elements_LMK/mUser/userAct.php?reqact=addnew">
            <p>Đăng ký</p>
            <input class="username" type="text" name="username" id="" placeholder="Tên đăng nhập">
            <input class="password" type="password" name="password"  placeholder="Mật khẩu">
            <input class="fullname" type="text" name="hoten" placeholder="Họ và Tên" >
            <div class="wrapp-gender" >
                <div class="gender">
                    <p>
                        Nam
                    </p>
                    <input type="radio" name="gioitinh" value="1" checked="true">
                </div>
                <div class="gender" >
                    <p>Nữ</p>
                    <input type="radio" name="gioitinh" value="0" />
                </div>
            </div>
            <input class="date" type="date" name="ngaysinh" />
            <input class="address" type="text" name="diachi" placeholder="Địa chỉ" >
            <input class="number" type="tel" name="dienthoai" placeholder="Điện Thoại" >
            <input class="button-register" type="submit" id="btnsubmit" value="Đăng kí" />
            </table>
        </form>
    </div>
</body>

</html>