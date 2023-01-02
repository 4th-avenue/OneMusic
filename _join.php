<?php
// 회원가입
require('../db/_conn.php');
$id = $_POST['id'];
$pw = $_POST['pw'];
$pwc = $_POST['pwc'];
$name = $_POST['name'];
$addr = $_POST['address'];

// id가 중복된 경우의 처리
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = $result->num_rows; // 결과값을 정수로 반환 1
if($row > 0) {
    // 중복된 id가 있는 경우
    echo "<script>alert('중복된 ID가 있습니다.');location.href='join.php'</script>";
}

// 패스워드를 잘못 입력한 경우의 처리
if ($pw != $pwc) {
    echo "<script>alert('패스워드를 확인해주세요.');location.href='join.php'</script>";
}

// pw 암호화
$pws = md5($pw);

// SELECT 조회, INSERT 삽입, UPDATE 변경, DELETE 삭제
$sql = "INSERT INTO users (id, pw, name, address) VALUE ('$id', '$pws', '$name', '$addr')";
$result = mysqli_query($conn, $sql);
if($result) {
    // 회원가입 후 로그인 처리
    require('_loginok.php');
    echo "<script>alert('회원 가입이 되었습니다.');location.href='index.php'</script>";
} else {
    echo "<script>alert('회원 가입에 실패했습니다.');location.href='login.php'</script>";
}
?>