<meta charset="UTF-8"/>

<?php
function update_valid()
{
    return isset($_POST['date']) && isset($_POST['order_id'])
        && isset($_POST['name']) && isset($_POST['price'])
        && isset($_POST['quantity']) && isset($_GET['num'])
        && preg_match('/[12][09][0-9]{2}-[01][0-9]-[0-3][0-9] [0-2][0-9]:[0-5][0-9]:[0-5][0-9]/', $_POST['date']);
}

function db_update()
{
    $db = mysqli_connect("localhost", "jjh", "1234");
    mysqli_select_db($db, "jjh_db");
    $num = mysqli_query($db, "SELECT num FROM tableboard_shop WHERE num={$_GET['num']};");
    $num = mysqli_fetch_array($num)['num'];
    if (!is_numeric($num)) {
        mysqli_close($db);
        return false;
    }

    $sql = "UPDATE tableboard_shop SET date='{$_POST['date']}', order_id={$_POST['order_id']}, "
        . "name='{$_POST['name']}', price={$_POST['price']}, quantity={$_POST['quantity']} "
        . "WHERE num={$num};";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
}

if (!(update_valid() && db_update())) {
    echo "<script>alert('수정 실패');</script>";
    return;
}

?>

<script>location.replace('../index.php');</script>
