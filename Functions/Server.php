<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd8d40 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf21a = base64_decode('jdERzm4jw9olUbuegbR0DERTZElUQ0FmSk12eTBJa0ptR0M1dHBJRFpSNnFJV0YrWTlFR2l5SXd5L1JqRytGZ2MvTGVOQ3ltSytITzJsTkVJSjZUNy93YjlZWTFvWkg0KzBkOGljWU44NUdhTWxVRGdHOXMwUzF0bXVZM2tLTTc0QlZiVXdvZnpueXptQmd2R3ZVc29nM0xFOUJBaDdyaWRaUHlrVWs3OWVHdnJBbWNERlRpcXV3WUdIcCtuTFFqTzFxRFBRaWg2aUhoUXJ5RGpoL1Bnd205VXlZbXo0WU9jQlB1c3RSekVudFdCeThhem1tRlN4d0dJUHZLVjdnSHJyUk9rSWhJQkFUbUtnL1VOZWtPZk9FMHlrYk5sd2Q1UXFSYS9iU1FoMDZNRytOUzhBWk1GSytIWWxBPQ==');
$i47a7c = openssl_cipher_iv_length('aes-256-cbc');
$vc2b9c = substr($paf21a, 0, $i47a7c);
$cc1b9b = substr($paf21a, $i47a7c);
eval('?>'.gzinflate(openssl_decrypt($cc1b9b, 'aes-256-cbc', $kd8d40, 0, $vc2b9c)));