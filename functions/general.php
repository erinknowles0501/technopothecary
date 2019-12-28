<?php 

function display_errors($errors, $action) {
    echo "<blockquote class='error'><h3>Could not ".$action.": encountered the following error/s:</h3>";
    foreach($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</blockquote>";
}

function sanitize($data) {
    global $conn;
    return htmlspecialchars(strip_tags(mysqli_real_escape_string($conn, $data)));
}


?>