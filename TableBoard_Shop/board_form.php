<?php
if (isset($_GET['num'])) {
    $db = mysqli_connect("localhost", "jjh", "1234");
    mysqli_select_db($db, "jjh_db");
    $table = mysqli_query($db, "SELECT date, order_id, name, price, quantity FROM tableboard_shop WHERE num={$_GET['num']};");
    $row = mysqli_fetch_array($table);
    mysqli_close($db);
}
?>
<!-- 출처 : https://colorlib.com/wp/template/responsive-table-v1/ -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <a href="index.php"
               style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; border-radius: 10px; margin-bottom: 5px;">
                Back </a>
            <form method="POST" action="<?php
            if (isset($_GET['num']))
                echo "function/update.php?num={$_GET['num']}";
            else
                echo "function/insert.php";
            ?>">
                <div class="table100">
                    <table>
                        <thead>
                        <tr class="table100-head">
                            <th class="column1">Date</th>
                            <th class="column2">Order ID</th>
                            <th class="column3">Name</th>
                            <th class="column4">Price</th>
                            <th class="column5">Quantity</th>
                            <th class="column6">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php if (isset($_GET['num'])) { ?>

                                <td class="column1">
                                    <input name="date" type="text" value="<?php echo $row['date']; ?>"/>
                                </td>
                                <td class="column2">
                                    <input name="order_id" type="number" value="<?php echo $row['order_id']; ?>"/>
                                </td>
                                <td class="column3">
                                    <input name="name" type="text" value="<?php echo $row['name']; ?>"/>
                                </td>
                                <td class="column4">
                                    <input name="price" type="number" placeholder="$" style="text-align: right;"
                                           value="<?php echo $row['price']; ?>"/>
                                </td>
                                <td class="column5">
                                    <input name="quantity" type="number" value="<?php echo $row['quantity']; ?>"
                                           style="text-align: right;"/>
                                </td>
                                <td class="column6">
                                    $<span id="total"> <?php echo $row['price'] * $row['quantity']; ?> </span>
                                </td>
                            <?php } else { ?>

                                <td class="column1">
                                    <input name="date" type="text" value="<?php date_default_timezone_set('Asia/Seoul');
                                    echo date('Y-m-d h:i:s', time()); ?>"/>
                                </td>
                                <td class="column2"><input name="order_id" type="number"/></td>
                                <td class="column3"><input name="name" type="text"/></td>
                                <td class="column4">
                                    <input name="price" type="number" placeholder="$" style="text-align: right;"/>
                                </td>
                                <td class="column5">
                                    <input name="quantity" type="number" value="1" style="text-align: right;"/>
                                </td>
                                <td class="column6">
                                    $<span id="total">0</span>
                                </td>
                            <?php } ?>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <?php if (isset($_GET['num'])) { ?>

                    <a href="function/delete.php?num=<?php echo $_GET['num']; ?>"
                       style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-top: 5px; margin-left: 5px; color: #007bff;">Delete</a>
                    <input type="submit" value="Update"
                           style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-top: 5px; margin-left: 5px; color: #007bff; cursor: pointer;">
                <?php } else { ?>

                    <input type="submit" value="Insert"
                           style="border: 1px; padding: 10px; background: #36304a; display: block; width: 100px; text-align: center; float: right; border-radius: 10px; margin-top: 5px; margin-left: 5px; color: #007bff; cursor: pointer;">
                <?php } ?>

            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script>
    $("input[name='price']").change(function () {
        $('#total').text($("input[name='price']").val() * $("input[name='quantity']").val());
    })

    $("input[name='quantity']").change(function () {
        $('#total').text($("input[name='price']").val() * $("input[name='quantity']").val());
    })
</script>

</body>
</html>