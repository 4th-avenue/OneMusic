<?php
require('../db/_conn.php');

$no = $_POST['no'];
$name = $_SESSION['name'];

// XSS 방지 처리
$category = htmlspecialchars($_POST['category'], ENT_QUOTES, 'UTF-8');
$title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

$sql = "UPDATE blog1 SET `name`='$name', `category`='$category', `title`='$title', `content`='$content', `mod_date`=CURRENT_TIMESTAMP() WHERE `no`=$no";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('글 수정이 완료되었습니다.');location.href='blog.php'</script>";
}
?>