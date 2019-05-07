<?php
session_start();
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
</style>
<div class="section-top">
    <a id="upload">Upload to Gallery</a>
</div>

<div class="section-mid">
    <div class="container">
        <div id="gallery" style="display:none;">

            <a href="http://unitegallery.net">
                <img alt="Lemon Slice"
                     src="assets/img/thumbs/tile1.jpg"
                     data-image="assets/img/big/tile1.jpg"
                     data-image-mobile="assets/img/thumbs/tile1.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile1.jpg"
                     data-description="This is a Lemon Slice"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Peppers"
                     src="assets/img/thumbs/tile2.jpg"
                     data-image="assets/img/big/tile2.jpg"
                     data-image-mobile="assets/img/thumbs/tile2.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile2.jpg"
                     data-description="Those are peppers"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Keys"
                     src="assets/img/thumbs/tile3.jpg"
                     data-image="assets/img/big/tile3.jpg"
                     data-image-mobile="assets/img/thumbs/tile3.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile3.jpg"
                     data-description="Those are keys"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Friuts in cup"
                     src="assets/img/thumbs/tile4.jpg"
                     data-image="assets/img/big/tile4.jpg"
                     data-image-mobile="assets/img/thumbs/tile4.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile4.jpg"
                     data-description="Those are friuts in a cup"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Yellow Flowers"
                     src="assets/img/thumbs/tile5.jpg"
                     data-image="assets/img/big/tile5.jpg"
                     data-image-mobile="assets/img/thumbs/tile5.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile5.jpg"
                     data-description="Those are yellow flowers"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Butterfly"
                     src="assets/img/thumbs/tile6.jpg"
                     data-image="assets/img/big/tile6.jpg"
                     data-image-mobile="assets/img/thumbs/tile6.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile6.jpg"
                     data-description="This is butterfly"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Boat"
                     src="assets/img/thumbs/tile7.jpg"
                     data-image="assets/img/big/tile7.jpg"
                     data-image-mobile="assets/img/thumbs/tile7.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile7.jpg"
                     data-description="This is a boat"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Woman"
                     src="assets/img/thumbs/tile8.jpg"
                     data-image="assets/img/big/tile8.jpg"
                     data-image-mobile="assets/img/thumbs/tile8.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile8.jpg"
                     data-description="This is a woman"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Cup Of Coffee"
                     src="assets/img/thumbs/tile9.jpg"
                     data-image="assets/img/big/tile9.jpg"
                     data-image-mobile="assets/img/thumbs/tile9.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile9.jpg"
                     data-description="This is cup of coffee"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Iphone Back"
                     src="assets/img/thumbs/tile10.jpg"
                     data-image="assets/img/big/tile10.jpg"
                     data-image-mobile="assets/img/thumbs/tile10.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile10.jpg"
                     data-description="This is iphone back"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Lemon Slice"
                     src="assets/img/thumbs/tile1.jpg"
                     data-image="assets/img/big/tile1.jpg"
                     data-image-mobile="assets/img/thumbs/tile1.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile1.jpg"
                     data-description="This is a Lemon Slice"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Peppers"
                     src="assets/img/thumbs/tile2.jpg"
                     data-image="assets/img/big/tile2.jpg"
                     data-image-mobile="assets/img/thumbs/tile2.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile2.jpg"
                     data-description="Those are peppers"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Keys"
                     src="assets/img/thumbs/tile3.jpg"
                     data-image="assets/img/big/tile3.jpg"
                     data-image-mobile="assets/img/thumbs/tile3.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile3.jpg"
                     data-description="Those are keys"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Friuts in cup"
                     src="assets/img/thumbs/tile4.jpg"
                     data-image="assets/img/big/tile4.jpg"
                     data-image-mobile="assets/img/thumbs/tile4.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile4.jpg"
                     data-description="Those are friuts in a cup"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Yellow Flowers"
                     src="assets/img/thumbs/tile5.jpg"
                     data-image="assets/img/big/tile5.jpg"
                     data-image-mobile="assets/img/thumbs/tile5.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile5.jpg"
                     data-description="Those are yellow flowers"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Butterfly"
                     src="assets/img/thumbs/tile6.jpg"
                     data-image="assets/img/big/tile6.jpg"
                     data-image-mobile="assets/img/thumbs/tile6.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile6.jpg"
                     data-description="This is butterfly"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Boat"
                     src="assets/img/thumbs/tile7.jpg"
                     data-image="assets/img/big/tile7.jpg"
                     data-image-mobile="assets/img/thumbs/tile7.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile7.jpg"
                     data-description="This is a boat"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Woman"
                     src="assets/img/thumbs/tile8.jpg"
                     data-image="assets/img/big/tile8.jpg"
                     data-image-mobile="assets/img/thumbs/tile8.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile8.jpg"
                     data-description="This is a woman"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Cup Of Coffee"
                     src="assets/img/thumbs/tile9.jpg"
                     data-image="assets/img/big/tile9.jpg"
                     data-image-mobile="assets/img/thumbs/tile9.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile9.jpg"
                     data-description="This is cup of coffee"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Iphone Back"
                     src="assets/img/thumbs/tile10.jpg"
                     data-image="assets/img/big/tile10.jpg"
                     data-image-mobile="assets/img/thumbs/tile10.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile10.jpg"
                     data-description="This is iphone back"
                     style="display:none">
            </a>
            <a href="http://unitegallery.net">
                <img alt="Lemon Slice"
                     src="assets/img/thumbs/tile1.jpg"
                     data-image="assets/img/big/tile1.jpg"
                     data-image-mobile="assets/img/thumbs/tile1.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile1.jpg"
                     data-description="This is a Lemon Slice"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Peppers"
                     src="assets/img/thumbs/tile2.jpg"
                     data-image="assets/img/big/tile2.jpg"
                     data-image-mobile="assets/img/thumbs/tile2.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile2.jpg"
                     data-description="Those are peppers"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Keys"
                     src="assets/img/thumbs/tile3.jpg"
                     data-image="assets/img/big/tile3.jpg"
                     data-image-mobile="assets/img/thumbs/tile3.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile3.jpg"
                     data-description="Those are keys"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Friuts in cup"
                     src="assets/img/thumbs/tile4.jpg"
                     data-image="assets/img/big/tile4.jpg"
                     data-image-mobile="assets/img/thumbs/tile4.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile4.jpg"
                     data-description="Those are friuts in a cup"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Yellow Flowers"
                     src="assets/img/thumbs/tile5.jpg"
                     data-image="assets/img/big/tile5.jpg"
                     data-image-mobile="assets/img/thumbs/tile5.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile5.jpg"
                     data-description="Those are yellow flowers"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Butterfly"
                     src="assets/img/thumbs/tile6.jpg"
                     data-image="assets/img/big/tile6.jpg"
                     data-image-mobile="assets/img/thumbs/tile6.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile6.jpg"
                     data-description="This is butterfly"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Boat"
                     src="assets/img/thumbs/tile7.jpg"
                     data-image="assets/img/big/tile7.jpg"
                     data-image-mobile="assets/img/thumbs/tile7.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile7.jpg"
                     data-description="This is a boat"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Woman"
                     src="assets/img/thumbs/tile8.jpg"
                     data-image="assets/img/big/tile8.jpg"
                     data-image-mobile="assets/img/thumbs/tile8.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile8.jpg"
                     data-description="This is a woman"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Cup Of Coffee"
                     src="assets/img/thumbs/tile9.jpg"
                     data-image="assets/img/big/tile9.jpg"
                     data-image-mobile="assets/img/thumbs/tile9.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile9.jpg"
                     data-description="This is cup of coffee"
                     style="display:none">
            </a>

            <a href="http://unitegallery.net">
                <img alt="Iphone Back"
                     src="assets/img/thumbs/tile10.jpg"
                     data-image="assets/img/big/tile10.jpg"
                     data-image-mobile="assets/img/thumbs/tile10.jpg"
                     data-thumb-mobile="assets/img/thumbs/tile10.jpg"
                     data-description="This is iphone back"
                     style="display:none">
            </a>


        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <p>
            Lorem ipsum dolor sit amet, vim cu case altera expetendis. Habeo eligendi persequeris quo ei, id sed prima
            volumus. Eum ad elitr utamur imperdiet, sit te detraxit evertitur, mel posse malorum consequat cu. Omnesque
            qualisque no cum.<br>
            Molestiae voluptatibus te qui, summo graece meliore eu per. Vitae nullam ea nec. Mel in dicunt oportere, te
            sea exerci aperiam alterum. Ne mel delenit nostrum dissentias, eam quem gubergren deseruisse te, ullum harum
            temporibus vel ut. Duo omnis minimum te, pro ad nulla scaevola. Quo tation nostro reprimique no.
        </p>
        <p>
            Noster phaedrum voluptaria ad nam. Quo novum legendos ut. No aliquam appetere scripserit cum. Labore
            nominavi et ius, elit dissentiet no eam, erat quando regione ea his. Ei quem molestiae sea. Aperiri delectus
            in cum, ei decore adipiscing definitionem qui, per congue senserit volutpat no.<br>
            Cu sumo idque quo, ei eum iusto omnium. Legere suscipiantur his ex. Quot iriure voluptaria at mel. Posse
            accommodare vix te, cum in pericula postulant, minim maiorum at mea. At pri oratio invidunt, est ad meliore
            necessitatibus.
        </p>
        <p>
            Lorem ipsum dolor sit amet, vim cu case altera expetendis. Habeo eligendi persequeris quo ei, id sed prima
            volumus. Eum ad elitr utamur imperdiet, sit te detraxit evertitur, mel posse malorum consequat cu. Omnesque
            qualisque no cum.<br>
            Molestiae voluptatibus te qui, summo graece meliore eu per. Vitae nullam ea nec. Mel in dicunt oportere, te
            sea exerci aperiam alterum. Ne mel delenit nostrum dissentias, eam quem gubergren deseruisse te, ullum harum
            temporibus vel ut. Duo omnis minimum te, pro ad nulla scaevola. Quo tation nostro reprimique no.
        </p>
    </div>
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