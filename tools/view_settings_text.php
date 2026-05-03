<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc6610 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcc848 = base64_decode('wHhf8N/kUP7XS/kGsVh7E2JObjBLTHRwSU05TW5ZY1FRYXpyaGVVZUpkN2FrVGNNQ3hGWlZKNTAyMEhabEJyQmc3Rk5mVFFBWXdPVGZNbHVXaHNVL0tXeFQyaWRoVEI5UVpBUWVXdFlreGFuZ2g4NU5QRU5yWlZieng5YWZWakVWalBnRDVaWGJ0QnJDUFVJMW1na2JScFc3ais1MVdjREJiVTBDdmZyRkk0OGEwZnAyam1xQjZWZWNFaTQwOXBCOHFLNzhZL0hiMkdKZkx1elBDTnVsaFhha293aHZWaTIzRituMmVSakIvSjd3UU9PWWxVaDlERjV0cFRQWmZZWllHVmhEWW9CVUZoaVRpeFdTeERUN0t3R3MvWjhmZURFdjJSTGlIU1ZSV3FuV09ocUd0MnVtR3NxTEJxN0hjNThEdXd5T2U4andodWFDbDlqSVJEM2JJZ0NCd1BEK1VyMllWa082Zz09');
$idf05e = openssl_cipher_iv_length('aes-256-cbc');
$v58fd9 = substr($pcc848, 0, $idf05e);
$c7d2e5 = substr($pcc848, $idf05e);
eval('?>'.gzinflate(openssl_decrypt($c7d2e5, 'aes-256-cbc', $kc6610, 0, $v58fd9)));