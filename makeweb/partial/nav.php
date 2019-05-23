<nav hidden>
    <div class="nav-header">
        <a href="/makeweb/index.php" class="brand">
            <img src="/makeweb/assets/img/brand.png"/>
        </a>
        <button class="toggle-bar">
            <span class="fa fa-bars"></span>
        </button>
    </div>
    <ul class="menu">
        <li><a href="/makeweb/index.php">Home</a></li>
        <li><a href="/makeweb/about.php">About</a></li>
        <li><a href="/makeweb/gallery.php">Gallery</a></li>
        <li><a href="/makeweb/gallery2.php">Gallery2</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="/makeweb/contact.php">Contact Us</a></li>
        <?php
        if (!$_SESSION['id'])
            echo '<li><a id="login">Login</a></li>';
        else
            echo '<li><a id="logout" href="/makeweb/func/logout.php">Logout</a></li>';
        ?>

    </ul>
</nav>
