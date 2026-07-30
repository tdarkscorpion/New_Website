<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kccff9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p99d91 = base64_decode('90VSnIu/7f/EBbUEPkRZmVoxSTdQT2p1V1hYazdldzlNWmF6d0wrYncxNFJjd1JEekNCSHhsSmZmdFl2eHIraEgyZEc0RFNwV001RUFpV3k5b3kwVmFRTVo0SURNRWlibzJocWowcklueE9GK1dodU9NRS9kbm5IWlRrPQ==');
$id90fc = openssl_cipher_iv_length('aes-256-cbc');
$vbf067 = substr($p99d91, 0, $id90fc);
$ca90d8 = substr($p99d91, $id90fc);
eval('?>'.gzinflate(openssl_decrypt($ca90d8, 'aes-256-cbc', $kccff9, 0, $vbf067)));