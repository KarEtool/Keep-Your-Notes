<?php
include 'connectUser.php';

$title = $_POST['title'];
$note = $_POST['note'];
$color = $_POST['color'];
$nickname = $_SESSION['nickname'];


$reg = "INSERT INTO notes(nickname,title,note,color) VALUES ('$nickname','$title','$note','$color')";
mysqli_query($conn,$reg);


?>