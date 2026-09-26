<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfe71d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc6466 = base64_decode('ZlDAH9zVPC7ENg/qvY6MlkpWa3JVR2pHNnE3a0JzVk1rcWt0WHJyUisrRWFneUE2aWhlZjM4N2xLd1JLQnF5VkR1cDlBUWZrSWRHNjlqaTVqSWhFWUNrZTlsMkRFQjZGbFllaVg4ZlhTWjBPN1ZJa2ZQWkMxVDBLTWtvcXRrc3JMRTNZRmt6VEtoMEFxYWpxWlQ2Skdub3dRTHRXSDg4QXFiS0FPMmlWN3A0TWk5NUVablRvYklHNFJPenBSc0VROXk1d2JhcTd2S0h1OTMzVXZnN2FMSWV3azdmSE1sSnkvMm52OVRGYlBQMzUyMzVDekY5ejJXZTMzRjRZYURBMy95d2xteFpYSUVPY2FnOWkwa1RVVDZLUW00SjcwNnNYMkhQcGh2M3lha3E1RzJYUEFQRkNPSjJ1blhrPQ==');
$i724dd = openssl_cipher_iv_length('aes-256-cbc');
$v82843 = substr($pc6466, 0, $i724dd);
$cf8a69 = substr($pc6466, $i724dd);
eval('?>'.gzinflate(openssl_decrypt($cf8a69, 'aes-256-cbc', $kfe71d, 0, $v82843)));