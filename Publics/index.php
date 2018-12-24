<?php

//Functions for broken URL catch in variable $url
$url = explode('?', $_SERVER['REQUEST_URI'], 4);

//Loop for the first level of $url
switch($url[0])
{
    //Controller Home called when the URL is at the root
    case '/movie_directory/':
        require('../Controllers/HomeController.php');
        break;

    //Page 404 is called when the URL doesn't exist
    //default:
        //header('HTTP/1.0 404 Not found');
        //require('404.php');
        //break;  
}