<?php

// $s ='../../administrator/elements_LMK/mod/database.php';
// if (file_exists($s)){
//     $f=$s;
// } else {
//     $f ='./administrator/elements_LMK/mod/database.php';
// }

// ------------------------------------------------------------
// $s ='../../elements_LMK/mod/database.php';
// if (file_exists($s)){
//     $f=$s;
// } else {
//     $f ='./elements_LMK/mod/database.php';
// }

// -----------------------------------------------------


$s = '../mod/database.php';
$s1 = './elements_LMK/mod/database.php';
$s2 = '../../administrator/elements_LMK/mod/database.php';
$s3 = './administrator/elements_LMK/mod/database.php';

if (file_exists($s)) {
    $f = $s;
}

elseif (file_exists($s1)) {
    $f = $s1;
}

elseif (file_exists($s2)) {
    $f = $s2;

}

elseif (file_exists($s3)) {
    $f = $s3;
}

require_once $f;



class hanghoa extends Database{
    public function HanghoaGetAll() {
        $getAll = $this->connect->prepare("select * from hanghoa");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }
    public function HanghoaAdd($tenhanghoa, $mota, $giathamkhao, $tenhinhanh, $hinhanh, $idloaihang) {
        $add = $this->connect->prepare("INSERT INTO hanghoa(tenhanghoa, mota, giathamkhao, tenhinhanh, hinhanh, idloaihang) VALUES (?,?,?,?,?,?)");
        $add->execute(array($tenhanghoa, $mota, $giathamkhao, $tenhinhanh, $hinhanh, $idloaihang));

        return $add->rowCount();
    }
    public function HanghoaDelete($idhanghoa) {
        $del = $this->connect->prepare("delete from hanghoa where idhanghoa=?");
        $del->execute(array($idhanghoa));

        return $del->rowCount();
    }
    public function HanghoaUpdate($tenhanghoa, $mota, $giathamkhao, $tenhinhanh, $hinhanh, $idloaihang, $idhanghoa) {
        $update = $this->connect->prepare("UPDATE hanghoa SET " . "tenhanghoa=?, mota=?, giathamkhao=?, tenhinhanh=?, hinhanh=?, idloaihang=?" . "WHERE idhanghoa = ?");
        $update->execute(array($tenhanghoa, $mota, $giathamkhao, $tenhinhanh, $hinhanh, $idloaihang, $idhanghoa));

        return $update->rowCount();
    }
    public function HanghoaGetbyId($idhanghoa) {
        $getTk = $this->connect->prepare("select * from hanghoa where idhanghoa=?");
        $getTk->setFetchMode(PDO::FETCH_OBJ);
        $getTk->execute(array($idhanghoa));

        return $getTk->fetch();
    }
    public function HanghoaGetbyIdloaihang($idloaihang) {
        $getAllId = $this->connect->prepare("select * from hanghoa where idloaihang=?");
        if ($getAllId->execute(array($idloaihang))) {
            $result = $getAllId->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } else {
            // handle error
            return false;
        }
    }
}
?>