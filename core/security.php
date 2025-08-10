<?php
//header("X-Content-Type-Options: nosniff");
//
//header("X-Frame-Options: SAMEORIGIN");
//
//header("X-XSS-Protection: 1; mode=block");
//
//header("Content-Security-Policy:
//    default-src 'self';
//    style-src 'self' 'unsafe-inline' https://fonts.googleapis.com;
//    font-src 'self' https://fonts.gstatic.com;
//    script-src 'self' 'unsafe-inline';
//    img-src 'self' data:;
//");
//
//header("Permissions-Policy: geolocation=(), camera=(), microphone=()");
//
//if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
//    header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
//}
//?>
<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error.log');
error_reporting(E_ALL);
