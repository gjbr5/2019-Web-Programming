<meta charset="UTF-8"/>

<script>
    location.replace('../index.php');
<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# MySQL DB에서, num에 해당하는 레코드를 POST로 받아온 내용으로 수정하기!
if (!isset($_GET['num'])) {
    echo "    alert('수정 실패');</script>";
    return;
}
$db = mysqli_connect("localhost", "jjh", "1234");
mysqli_select_db($db, "jjh_db");
$num = mysqli_query($db, "SELECT num FROM tableboard_shop WHERE num={$_GET['num']};");
$num = mysqli_fetch_array($num)['num'];

if (is_numeric($num)) {
    $sql = "UPDATE tableboard_shop SET date='{$_POST['date']}', order_id={$_POST['order_id']}, "
        . "name='{$_POST['name']}', price={$_POST['price']}, quantity={$_POST['quantity']} "
        . "WHERE num={$num};";
    mysqli_query($db, $sql);
    echo "    alert('수정 성공'); </script>";
} else {
    echo "    alert('수정 실패'); </script>";
}
mysqli_close($db);
?>