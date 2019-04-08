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

    # MySQL DB에서, POST로 받아온 내용 입력하기!
    if (!(array_key_exists('date', $_POST) && array_key_exists('order_id', $_POST)
        && array_key_exists('name', $_POST) && array_key_exists('price', $_POST)
        && array_key_exists('quantity', $_POST))) {
        echo "    alert('삽입 실패'); </script>";
        return;
    }
    $db = mysqli_connect("localhost", "jjh", "1234");
    mysqli_select_db($db, "jjh_db");
    $num = mysqli_query($db, "SELECT num+1 AS \"num\" FROM tableboard_shop ORDER BY num DESC LIMIT 1;");
    $num = mysqli_fetch_array($num);
    $num = $num['num'];
    if (!is_numeric($num))
        $num = 0;

    $sql = "INSERT INTO tableboard_shop VALUES ({$num}, '{$_POST['date']}', ";
    $sql .= "{$_POST['order_id']}, '{$_POST['name']}', {$_POST['price']}, {$_POST['quantity']});";
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    if ($result)
        echo "</script>";
    else
        echo "    alert('삽입 실패'); </script>";
    ?>
