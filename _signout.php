<?php
require('../db/_conn.php');
$no = $_SESSION['no'];

// DB에 남기고 삭제
$sql = "UPDATE users SET del_flg = 1 WHERE no= $no";
// 완전 삭제
// $sql = "DELETE FROM users WHERE `no`=\"$_SESSION['no']\"";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('회원 탈퇴가 완료되었습니다.');location.href='index.php'</script>";
    require('_logout.php');
}
?>