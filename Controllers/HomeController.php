<?php
//Return to movie.php for start functions who display content of home page with requests
require('../Models/model.php');
$top5=home();

//Sent of home view when controller is ready
require('../Views/home.php');

?>