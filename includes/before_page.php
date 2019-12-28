<!DOCTYPE html>
<html>

<head>
    <title>Technopothecary</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= $path ?>water.css-master/dist/light.standalone.min.css">
    <link rel="stylesheet" href="<?= $path ?>style.css">
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
            <li>My profile</li>
            <li><a href="logout.php">Log out</a></li>
        </ul>
        <ul>
            <li>My coven</li>
            <li><a href="townhall.php">Town hall</a></li>
            <li>My house</li>
            <li><a href="garden.php">My garden</a></li>
            <li>My familiar</li>
        </ul>
        <ul>
            <li>Explore</li>
            <li>My spells</li>
            <li>Events</li>
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