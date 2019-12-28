<?php

function login($email, $password) {
    global $conn;
    
    // sanitize you fool
    $email = sanitize($email);
    $password = $password;
    
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $data = mysqli_fetch_array(mysqli_query($conn, $sql));
    
    return ($data) ? $data : false;
}

function logged_in() {
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

function user_data($user_id) {
    global $conn;
    $data = array();
    $user_id = (int)$user_id;
    
    $func_num_args = func_num_args();
    $func_get_args = func_get_args();
    
    if ($func_num_args > 1) {
        unset($func_get_args[0]);
        
        $fields = '`' . implode('`, `', $func_get_args) . '`';
        
        $result = mysqli_query($conn, "SELECT $fields FROM `users` WHERE `user_id` = $user_id");
        $data = mysqli_fetch_assoc($result);
        
        return $data;
    }

}


// == in return line has to be that way, === 1 and === true don't work
function user_exists($email) {
    global $conn;
    $username = sanitize($email);
    // $query = mysqli_query($conn, "SELECT COUNT(`user_id`) as cnt FROM `users` WHERE `username` = '$username'");
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $query = mysqli_query($conn, $sql);
    return mysqli_num_rows($query) ? true : false;
}






?>