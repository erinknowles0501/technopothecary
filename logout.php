<?php

include 'functions/init.php';

$title = "Log out";

include 'includes/before_page.php';


?>





<?php
session_start();

session_destroy();

header('Location: index.php?logoutsuccess');

?>





<?php

include 'includes/after_page.php';

?>