<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($tensohuu, $username, $pass, $email, $phone, $diachi)
{
    $sql = "insert into taikhoan(tensohuu, username, pass, email, phone, diachi) 
            values('$tensohuu', '$username', '$pass', '$email', '$phone', '$diachi')";
    pdo_execute($sql);
}
function check_user($username, $pass)
{
    $sql = "select * from taikhoan where username='" . $username . "'AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($tennew, $usernew, $passnew, $emailnew, $telnew, $diachinew, $idtk)
{
    $sql = "update taikhoan 
    set username='" . $usernew . "', tensohuu='" . $tennew . "', pass='" . $passnew . "', email='" . $emailnew . "', diachi='" . $diachinew . "', phone='" . $telnew . "' where idacc=" . $idtk;
    pdo_execute($sql);
}
?>