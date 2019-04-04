<meta charset="UTF-8" />
<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, num에 해당하는 레코드 삭제하기!
$db = mysqli_connect("localhost", "jjh", "1234");
mysqli_select_db($db, "jjh_db");
$table = mysqli_query($db, "DELETE FROM tableboard_shop WHERE num={$_GET[num]};");
mysqli_close($db);

echo "<script> alert('삭제 완료') </script>"

?>

<script>
    location.replace('../index.php');
</script>
