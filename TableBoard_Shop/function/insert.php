<meta charset="UTF-8"/>
<?php
function insert_valid()
{
    return isset($_POST['date']) && isset($_POST['order_id'])
        && isset($_POST['name']) && isset($_POST['price'])
        && isset($_POST['quantity'])
        && preg_match('/[12][09][0-9]{2}-[01][0-9]-[0-3][0-9] [0-2][0-9]:[0-5][0-9]:[0-5][0-9]/', $_POST['date']);
}

function db_insert()
{
    $db = mysqli_connect("localhost", "jjh", "1234");
    mysqli_select_db($db, "jjh_db");
    $num = mysqli_query($db, "SELECT num+1 AS \"num\" FROM tableboard_shop ORDER BY num DESC LIMIT 1;");
    $num = mysqli_fetch_array($num)['num'];
    if (!is_numeric($num))
        $num = 0;

    $sql = "INSERT INTO tableboard_shop VALUES ({$num}, '{$_POST['date']}', "
        . "{$_POST['order_id']}, '{$_POST['name']}', {$_POST['price']}, {$_POST['quantity']});";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
}

if (!(insert_valid() && db_insert()))
    echo "<script>alert('삽입 실패');</script>";
?>

<script>location.replace('../index.php');</script>