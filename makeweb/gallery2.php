<?php
session_start();
?>

<!DOCTYPE html>
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

        </div>
    </div>
</div>
<div class="section-pagination">

</div>
<?php
include "partial/popup.php";
include "partial/script.php";
?>

<script type='text/javascript' src='dist/unitegallery/js/unitegallery.min.js'></script>
<link rel='stylesheet' href='dist/unitegallery/css/unite-gallery.css' type='text/css'/>
<script type='text/javascript' src='dist/unitegallery/themes/tiles/ug-theme-tiles.js'></script>

<script type="text/javascript">
    let current_page = 0;
    let total_page = 2;
    let total_item_text = "";
    let api = null;

    function get_data() {
        $.ajax({
            url: "func/getdata.php",
            type: "post",
            dataType: "json",
            data: "p=" + (current_page + 1) + "&item_per_page=" + 5,
            success: data => {
                total_page = data['total_page'];
                for (let i = 0; i < data['datalist'].length; i++) {
                    total_item_text +=
                        "<a href=\"#\">\n" +
                        "<img alt=\"" + data['datalist'][i]['title'] + "\"\n" +
                        "src=\"" + data['datalist'][i]['thumb_path'] + "\"\n" +
                        "data-image=\"" + data['datalist'][i]['path'] + "\"\n" +
                        "data-image-mobile=\"" + data['datalist'][i]['thumb_path'] + "\"\n" +
                        "data-thumb-mobile=\"" + data['datalist'][i]['thumb_path'] + "\"\n" +
                        "data-description=\"" + data['datalist'][i]['description'] + "\"\n" +
                        "style=\"display:none\">\n" +
                        "</a>";
                }
                if (api)
                    api.destroy();
                $('#gallery').empty();
                $('#gallery').append(total_item_text);
                api = jQuery("#gallery").unitegallery();
            }
        });
    }

    jQuery(document).ready(function () {
        jQuery("#gallery").unitegallery();

        $(window).bind('mousewheel', e => {
            if (e.originalEvent.wheelDelta / 120 <= 0) {
                if (Math.ceil($(window).scrollTop()) + $(window).height() >= $(document).height()) {
                    if (current_page < total_page - 1)
                        get_data();
                }
            }
        });
    });

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