<?php
require_once './administrator/elements_LMK/mod/hanghoaCls.php';
$hanghoa = new hanghoa();

if (isset($_REQUEST['reqView'])) {
    $idloaihang = $_REQUEST['reqView'];
    $list_hanghoa = $hanghoa->HanghoaGetbyIdloaihang($idloaihang);
}
else {
    $list_hanghoa = $hanghoa->HanghoaGetAll();
}
?>

<div class="container">
    <?php
    foreach ($list_hanghoa as $v) {
        if (isset($v->giathamkhao)) {
            echo "";
        }
        else {
            echo "";
        }
        ?>
        <a  class="itemone" href="./index.php?reqHanghoa=<?php echo $v->idhanghoa;?>">
            <div class="itemsHanghoa">
                <img  src="data:image/png;base64, <?php echo $v->hinhanh;?>" alt="" class="imgHanghoa">
                <div class="info-product" >
                    <p class="tensanpham" >
                    Sản phẩm: <?php echo $v->tenhanghoa;?>
                    </p>
                    <p class="giasanpham">
                    Giá bán: <?php echo $v->giathamkhao;?>
                    </p>
                </div>
            </div>
        </a>
    <?php
    }
    ?>
</div>