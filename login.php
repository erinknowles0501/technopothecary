<?php

include 'functions/init.php';

$title = "Log in";

include 'includes/before_page.php';


?>

<?php


if (empty($_POST) === false) {
$email = $_POST['email'];
$password = $_POST['password'];


    if (empty($email) === true || empty($password) === true ) {
        $errors[] = 'You need to enter your email address AND password';
    } else if ( user_exists($email) === false) {
        $errors[] = 'No user with that email, check for typos?';
    } else {
    
        $login = login($email, $password);
        if ($login === false) {
           $errors[] = 'That user/password combo is incorrect';
        } else {
            $_SESSION['user_id'] = $login;
            header('Location: index.php');
            exit();
        }
    }
    
    if (empty($errors) === false) {
        display_errors($errors, "log in");
    }

}




?>




<form method="POST" action="login.php">
    <ul>
        <li><label for="email">Email:</label><br>
        <input type="email" id="email" name="email"></li>
        <li><label for="password">Password:</label><br>
        <input type="password" id="password" name="password"></li>
        <li><button>Dang</button>
    </ul>

</form>








<?php

include 'includes/after_page.php';

?>