<!DOCTYPE html>
<html>

<head>
    <title>Technopothecary</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <header>
        <h1>Ayyyy</h1>
        well you know hello and all</header>
    
    <?php 
    // change available nav depending on logged_in().
    // DO THIS SMARTER. LATER.
    
    if (logged_in()) {
    ?>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>About</li>
            <li><a href="logout.php">Log out.</a></li>
        </ul>
    </nav>
    <?php
    } else {
    ?>
    
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>About</li>
            <li>Register</li>
        </ul>
    </nav>
    
    <?php
    }
    ?>

    <main>
        <h2 class="page-title"><?= $title ?></h2>