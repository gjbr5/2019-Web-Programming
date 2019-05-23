<?php
session_start();
$db = mysqli_connect('localhost', 'root', 'apmsetup', 'makeweb');
$total_item = mysqli_query($db, "SELECT COUNT(*) AS cnt FROM upload;");
$total_item = mysqli_fetch_array($total_item);
$total_item = $total_item['cnt'];
$item_per_page = 12;

$current_page = 1;
if (isset($_GET['p']))
    $current_page = $_GET['p'];

$num_page_button = 5;
$total_page = ceil($total_item / $item_per_page);

$start = ($current_page - 1) * $item_per_page;
$sql = "SELECT * FROM upload LIMIT $start, $item_per_page;";
?>
<!doctype html>
<html lang="ko">
<head>
    <title>coreNavigation - Multi purpose navigation menu for javascript library based on jquery</title>
    <?php
    include "partial/meta.php";
    ?>

</head>
<body>
<!-- Start Navigation -->
<?php
include "partial/nav.php";
?>

<!-- End Navigation -->

<?php
if ($_SESSION['id']) {
    ?>
    <style>
        .section-top {
            text-align: center;
            padding: 10px;
        }

        .section-top a {
            text-decoration: none;
            color: #3a3a3a;
        }

        .section-top a:hover {
            color: #e74c3c;
        }

        .section-pagination {
            text-align: center;
            padding: 30px;
        }

        .section-pagination a {
            text-decoration: none;
            background: #3a3a3a;
            color: #FFFFFF;
            padding: 10px;
            margin: 2.5px;
            width: 40px;
            display: inline-block;
        }

        .section-pagination a:hover {
            background: #e74c3c;
        }

        #selected {
            background: #e74c3c;
        }
    </style>
    <div class="section-top">
        <a id="upload">Upload to Gallery</a>
    </div>
    <?php
}
?>

<div class="section-mid">
    <div class="container">
        <div id="gallery" style="display:none;">
            <?php
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "
            <a href=\"http://unitegallery.net\">
                <img alt=\"{$row['title']}\"
                     src=\"{$row['thumb_path']}\"
                     data-image=\"{$row['path']}\"
                     data-image-mobile=\"{$row['thumb_path']}\"
                     data-thumb-mobile=\"{$row['thumb_path']}\"
                     data-description=\"{$row['description']}\"
                     style=\"display:none\">
            </a>";
            }
            mysqli_close($db);
            ?>

        </div>
    </div>
</div>
<div class="section-pagination">
    <?php
    if ($current_page > 1) {
        $prev = $current_page - 1;
        echo "<a href=\"?p=1\"> << </a>";
        echo "
    <a href=\"?p=$prev\"> < </a>";
    }

    if ($total_page > $current_page + $num_page_button)
        $display_page = $num_page_button;
    else
        $display_page = $total_page - $current_page+1;

    for ($i = $current_page; $i < $current_page + $display_page; $i++) {
        if ($i == $current_page)
            echo "
    <a id='selected' href='?p=$i'>$i</a>";
        else
            echo "
    <a href='?p=$i'>$i</a>";
    }
    $next = $current_page + 1;
    $final = $total_page;
    if ($current_page < $total_page) {
        echo "
    <a href=\"?p=$next\"> > </a>";
        echo "
    <a href=\"?p=$final\"> >> </a>";
    }
    ?>

</div>
<?php
include "partial/popup.php";
include "partial/script.php";
?>

<script type='text/javascript' src='dist/unitegallery/js/unitegallery.min.js'></script>
<link rel='stylesheet' href='dist/unitegallery/css/unite-gallery.css' type='text/css'/>
<script type='text/javascript' src='dist/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
<script type="text/javascript">

    jQuery(document).ready(function () {

        jQuery("#gallery").unitegallery();

    });

</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#imgPrev').attr('src', e.target.result);
                $('#imgPrev').css('display', 'block');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });

</script>

</body>
</html>