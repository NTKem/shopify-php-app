<?php
require_once("inc/functions.php");

$params = $_GET;
$hmac = $_GET['hmac'];
$serializeArray = serialize($params);
$params = array_diff_key($params, array('hmac' => ''));
ksort($params);

$parsedUrl = parse_url('https://'.$params['shop']);
$host = explode('.', $parsedUrl['host']);
$subdomain = $host[0];

$shop = $subdomain;
$token = "0ce3d4abed666048f57fcb3f8efddd7a";


$array = array(
    'script_tag' => array(
        'event' => 'onload',
        'src' => 'https://ntkem.test/scripts/shopify.js'
    )
);
$scriptTag = shopify_call($token, $shop, "/admin/api/2019-07/script_tags.json", $array, 'POST');
$scriptTag = json_decode($scriptTag['response'], JSON_PRETTY_PRINT);
