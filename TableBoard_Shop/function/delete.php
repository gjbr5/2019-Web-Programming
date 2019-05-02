<meta charset="UTF-8"/>
<?php
function delete_valid($db)
{
    return isset($_GET['num'])
        && isset(mysqli_fetch_array(
                mysqli_query($db, "SELECT num FROM tableboard_shop WHERE num={$_GET['num']};"))['num']);
}

function db_delete()
{
    $db = mysqli_connect("localhost", "jjh", "1234");
    mysqli_select_db($db, "jjh_db");
    $result = mysqli_query($db, "DELETE FROM tableboard_shop WHERE num={$_GET['num']};");
    mysqli_close($db);
    return $result;
}

if (!(delete_valid($db) && db_delete()))
    echo "<script>alert('삭제 실패');</script>";
?>

<script>location.replace('../index.php');</script>