<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd42db = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p16e95 = base64_decode('GSbX0ukeXjXnEJVU91g/XW51cFp6MVpPbDZ0YlFDTllxN3dlV2ZyOW5xZzF0RTJPdlJ3KzlCeEZxU1JkREpwLzR5QTc2REEvUlB3QXEyRkZmS2FFcW9LTWJZOFBSUU5FcnFNeTUvRzEvRWVPVTluRHhoaHJlQWdwbFRDNWlQdEc2dW1INnNsR2VESVRJQ3J6blRzMGxwSGJpYzRDNjJIa3lEbFVsb2hWK2s3eDJWUSt4T2paTkROUm1CL3hwOUE2U2l5c3R4L2RqUitHbWs4UjBsREdiUEFSNFhXRTJZeDliRTZ3UzVsV21kZkRFSWpoaUtISkl5QXU5Y2RMY1RuNHNmeFYrQTlnVENpbGlZU3A=');
$ibafce = openssl_cipher_iv_length('aes-256-cbc');
$vbe5c9 = substr($p16e95, 0, $ibafce);
$c6a590 = substr($p16e95, $ibafce);
eval('?>'.gzinflate(openssl_decrypt($c6a590, 'aes-256-cbc', $kd42db, 0, $vbe5c9)));