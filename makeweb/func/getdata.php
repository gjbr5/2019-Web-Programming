<?php
$db = mysqli_connect('localhost', 'root', 'apmsetup', 'makeweb');

$item_per_page = 5;
if (isset($_POST['item_per_page'])) {
    $item_per_page = $_POST['item_per_page'];
}
$current_page = 1;
if (isset($_POST['p']))
    $current_page = $_POST['p'];

$total_item = mysqli_query($db, "SELECT COUNT(*) AS cnt FROM upload;");
$total_item = mysqli_fetch_array($total_item);
$total_item = $total_item['cnt'];
$total_page = ceil($total_item / $item_per_page);

$start = ($current_page - 1) * $item_per_page;
$sql = "SELECT * FROM upload LIMIT $start, $item_per_page;";
$result = mysqli_query($db, $sql);

$data_list = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($data_list, $row);
}

$result_array = array("total_page" => $total_page, "datalist" => $data_list);
echo json_encode($result_array);
mysqli_close($db);
