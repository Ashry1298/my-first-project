<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if (!isset($_SESSION['auth'])):
            ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li>
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <?php
           else: 
            ?>
            <li>
                <a class="nav-link" href="profile.php">profile</a>
            </li>
            <?php
            endif;  
            ?>
            </li>
            <?php
            if (isset($_SESSION['auth'])):
            ?>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav_item">
                <a class="nav-link" href="logout.php">logout</a>
            </li>
        </ul>
        <?php
            endif;  
            ?>
    </div>
</nav>