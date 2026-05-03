<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kae64b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb859f = base64_decode('IO11Mavvvcy1v2wTTD5pg0xRcUluY3Zub253UWJlZ0l1c2xpWVRTQlk2Y204RXZiZFJLZUk0Rmt0OWtJU0diQTdQZzdjQVVnRm5PalgrNEZXdE5mQWRzYjIrNVIvRStFOFJIOUxZR2hheUNUQ1U4VWhmdzBvNXZGbVY0am1COGdCM2s0dlpEeDliSkxIMUV2OXkyV0hQMUh3T2VwbFdObVV0b0taUDdKVE1kVEJobmZWOWZGeHlGbjJsQ3U0bHJ5YmE2aHZRMUVXME05ckVFdw==');
$i517f3 = openssl_cipher_iv_length('aes-256-cbc');
$va21b0 = substr($pb859f, 0, $i517f3);
$c95076 = substr($pb859f, $i517f3);
eval('?>'.gzinflate(openssl_decrypt($c95076, 'aes-256-cbc', $kae64b, 0, $va21b0)));