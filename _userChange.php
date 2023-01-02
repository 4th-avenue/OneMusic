<?php
require('../db/_conn.php');

$no = $_SESSION['no'];
$name = $_POST['name'];
$pw = $_POST['pw'];
$pwc = $_POST['pwc'];
$addr = $_POST['address'];
$id = $_SESSION['id'];

// 패스워드를 잘못 입력한 경우의 처리
if ($pw != $pwc) {
    echo "<script>alert('패스워드를 확인해주세요.');location.href='user.php'</script>";
}

// pw 암호화
$pws = md5($pw);

$sql = "UPDATE users SET `name`='$name', `address`='$addr', `pw`='$pws' WHERE `no`=$no";
$result = mysqli_query($conn, $sql);

if ($result) {
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    foreach($result as $user) {
        $_SESSION['no'] = $user['no'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['address'] = $user['address'];
    }
    echo "<script>alert('변경이 완료되었습니다.');location.href='user.php'</script>";
}
?>