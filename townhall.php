<?php 
include 'functions/init.php';


$title = 'Town hall';
include 'includes/before_page.php';
?>

<a href="#">Post a motion</a>
<a href="#">View resolved motions</a>


<div class="motion open">
    <b>Change welcome text to "Howdy pardner"</b>
    <p>We need people to know we're friendly but cool</p>
    <a href="#">See discussion</a>
    <form>
        <input type="radio" name="vote" id="for"><label for="for">For</label>
        <input type="radio" name="vote" id="against"><label for="against">Against</label>
        <button>Vote</button>
    </form>
</div>




<?php
include 'includes/after_page.php';
?>