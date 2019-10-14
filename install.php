<?php
// Set variables for our request
$shop = $_GET['shop'];
$api_key = "d0ab62a6b80698ae544206c38c0ef622";
$scopes = "read_orders,write_products,write_script_tags";
$redirect_uri = "https://ntkem.test/generate_token.php";
// Build install/approval URL to redirect to
$install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);
// Redirect

header("Location: " . $install_url);
die();