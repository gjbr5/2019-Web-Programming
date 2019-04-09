<!-- 구글 검색 : galley board css => CSS Only Pinterest-like Responsive Board Layout - Boardz.css | CSS ... -->
<!-- 출처 : https://www.cssscript.com/css-pinterest-like-responsive-board-layout-boardz-css/ -->
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Boardz Demo</title>
    <meta name="description" content="Create Pinterest-like boards with pure CSS, in less than 1kB.">
    <meta name="author" content="Burak Karakan">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no;"/>
    <link rel="stylesheet" href="src/boardz.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wingcss/0.1.8/wing.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="seventyfive-percent  centered-block">
    <div>
        <hr class="seperator">
        <div class="text-center">
            <h2>Beautiful <strong>Boardz</strong></h2>
            <div style="display: block; width: 50%; margin-right: auto; margin-left: auto; position: relative;">
                <form class="example" action="board.php" method="post">
                    <label for="search"><input type="text" placeholder="Search.." name="search"/></label>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <div class="boardz centered-block beautiful">
            <?php
            $connect = mysqli_connect("localhost", "jjh", "1234");
            $db_con = mysqli_select_db($connect, "jjh_db");
            if (isset($_POST['search']))
                $sql = "SELECT * FROM boardz WHERE title LIKE '%{$_POST['search']}%';";
            else
                $sql = "SELECT * FROM boardz;";
            $result = mysqli_query($connect, $sql);
            $num = mysqli_num_rows($result);

            $first = array();
            $second = array();
            $third = array();

            for ($i = 0; $i < $num; $i++) {
                $row = mysqli_fetch_array($result);

                $item = "\n\t\t\t\t<li>";
                if ($row['title'])
                    $item .= "<h1>{$row['title']}</h1>";
                if ($row['contents'])
                    $item .= "{$row['contents']}<br />";
                $item .= "<img src='{$row['image_url']}' alt='demo image' />";
                $item .= "</li>";

                switch ($i % 3) {
                    case 0:
                        $first[$i / 3] = $item;
                        break;
                    case 1:
                        $second[$i / 3] = $item;
                        break;
                    case 2:
                        $third[$i / 3] = $item;
                        break;
                }
            }
            if (count($first)) {
                echo "\n\t\t\t<ul>";
                foreach ($first as $item)
                    echo $item;
                echo "\n\t\t\t</ul>";
            }
            if (count($second)) {
                echo "\n\t\t\t<ul>";
                foreach ($second as $item)
                    echo $item;
                echo "\n\t\t\t</ul>";

            }
            if (count($third)) {
                echo "\n\t\t\t<ul>";
                foreach ($third as $item)
                    echo $item;
                echo "\n\t\t\t</ul>";
            }
            mysqli_close($connect);
            ?>

        </div>
    </div>
    <hr class="seperator">
</div>
</body>
</html>