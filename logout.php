<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd3acf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b605 = base64_decode('kv/T2NNuhwrKtbviy7/+dFFKRlNmM042eUpTWStMY3ZLVnFyTS8xa1VuYzRtb0YrVGp4R0VFZnZWK1c3cUlFRmpVUDNOVEVsdzFqeVV2YXBjWEpFWGRoWnVNcThvcjA0K3hqVmJOR3p6N25CY1NzSnNZeWFsVDhubDd3PQ==');
$ibdce3 = openssl_cipher_iv_length('aes-256-cbc');
$v11b6e = substr($p0b605, 0, $ibdce3);
$cbf91e = substr($p0b605, $ibdce3);
eval('?>'.gzinflate(openssl_decrypt($cbf91e, 'aes-256-cbc', $kd3acf, 0, $v11b6e)));