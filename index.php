<?php 
include 'functions/init.php';


if (logged_in()) {
    $title = "Welcome, " . $user_data['username'] . "!";
} else {
    $title = "Welcome!";
}
include 'includes/before_page.php';
?>

<?php
if (isset($_GET['logoutsuccess']) && empty($_GET['logoutsuccess'])) {
    echo "<blockquote class='success'><h3>Logged out!</h3></blockquote>";
}
?>

You just hold your horses

<?php

if (!logged_in() ) {
    ?>
    <p>Why don't you <a href="login.php">log in</a> or <a href="register.php">register</a>?

    <?php
}

?>




<?php
include 'includes/after_page.php';
?>