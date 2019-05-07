<nav hidden>
    <div class="nav-header">
        <a href="#" class="brand">
            <img src="assets/img/brand.png" />
        </a>
        <button class="toggle-bar">
            <span class="fa fa-bars"></span>
        </button>
    </div>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Contact Us</a></li>
        <?php
            if(!$_SESSION['id'])
                echo '<li><a id="login">Login</a></li>';
            else
                echo '<li><a id="logout" href="func/logout.php">Logout</a></li>';
        ?>

    </ul>
</nav>
