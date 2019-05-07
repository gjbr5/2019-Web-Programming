<?php

session_start();
$db = mysqli_connect("localhost", "root", "apmsetup");
mysqli_select_db($db, "makeweb");
$sql = "SELECT id FROM user WHERE id='{$_POST['id']}' AND pw=password('{$_POST['pw']}');";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
mysqli_close($db);
$id = $row['id'];
if ($id) {
    $_SESSION['id'] = $id;
} else {
    echo '<script>alert("Login Failed!");</script>';
}

echo "<script>location.replace('../index.php');</script>";
?>
