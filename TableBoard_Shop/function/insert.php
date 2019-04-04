<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!
$db = mysqli_connect("localhost", "jjh", "1234");
mysqli_select_db($db, "jjh_db");
$num = mysqli_query($db, "SELECT num+1 FROM tableboard_shop ORDER BY num DESC LIMIT 1;");
$num = mysqli_fetch_array($num);
$num = $num[0];
echo $num;
#$table = mysqli_query($db, "INSERT INTO tableboard_shop VALUES ({$_GET[num]};");
mysqli_close($db);
# 참고 : 에러 메시지 출력 방법
echo "<script> alert('insert - error message') </script>"

?>

<script>
    //location.replace('../index.php');
</script>
