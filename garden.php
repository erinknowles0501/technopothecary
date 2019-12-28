<?php 
include 'functions/init.php';


$title = 'My garden';
include 'includes/before_page.php';
?>


<p>Welcome to your garden! You can plant herbs and other plants, place gnomes and charms, weed, harvest...</p>

<!--
HOKAY so
it's an array containing arrays
something like
[x] = item, type, stage...
[0] = gnome, 1 // gnome of type 1 ("no-weed gnome")
[1] = herb, 4, 1 // herb of type 4 ("rosemary"), in the 1st stage of growing
[2] = weed, 2 // weed of type 2 ("dandelion")
-->

<div class="garden">
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
    <div class="area"></div>
</div>





<?php
include 'includes/after_page.php';
?>