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

# MySQL DB에서, num에 해당하는 레코드 삭제하기!
if (!isset($_GET['num'])) {
    echo "    alert('삭제 실패');</script>";
    return;
}
$db = mysqli_connect("localhost", "jjh", "1234");
mysqli_select_db($db, "jjh_db");
$num = $_GET['num'];
if (isset(mysqli_fetch_array(mysqli_query($db, "SELECT num FROM tableboard_shop WHERE num={$num};"))['num'])) {
    $table = mysqli_query($db, "DELETE FROM tableboard_shop WHERE num={$_GET['num']};");
    echo "    alert('삭제 완료'); </script>";
}
else
    echo "    alert('삭제 실패');</script>";
mysqli_close($db);
?>