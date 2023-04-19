<?php

// Getting Subdomain Starts
$arr = explode('.', $_SERVER["SERVER_NAME"]);
$subdomainexactly = $arr[0];
$domain = $arr[1];
$fulldomain = $domain . ".com/";
$domainwithext = $fulldomain . "?ref=" . $subdomainexactly;
$subdomain = ucfirst($subdomainexactly);
// Getting Subdomain Ends

$today = date("j M");


$func_search_url = "/search-0.php";
$func_search_url_prefix = "/search-0.php/?q=";


$searchquery = $_COOKIE['q'];
$lang = $_COOKIE['lang'];
$quality = $_COOKIE['quality'];
