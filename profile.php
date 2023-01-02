<?php
include "inc/header.php"; ?>
<?php
include "inc/nav.php"; ?>

<h1>Profile Page</h1>
<div class="container">
    <div class="row">
        <div class="col_8 mx-auto">
            <h2> Name : <?php echo $_SESSION['auth'][0]; ?></h2>
            <h2> Email: <?php echo $_SESSION['auth'][1]; ?></h2>

        </div>
    </div>
    <?php
    include "inc/footer.php"; ?>