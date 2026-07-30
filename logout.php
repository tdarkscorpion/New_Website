<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4090f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9d3e4 = base64_decode('oxc9Irub5XyaIgdt4mT//lNDRkwzMkJOS1N3ajQ2QXVyU0Rob0FqclcreWVvQzVmWjBSdFlvc1puRmp4YXd5Vk9HOXgzbGt0cGo2Zmg3Q09qNEgvYkc1NXAvNkpucVoyK1k2V3dwUHd0cmN5OVRRWGJTeExWd0pBeTR3PQ==');
$i182a6 = openssl_cipher_iv_length('aes-256-cbc');
$vb30f3 = substr($p9d3e4, 0, $i182a6);
$c38495 = substr($p9d3e4, $i182a6);
eval('?>'.gzinflate(openssl_decrypt($c38495, 'aes-256-cbc', $k4090f, 0, $vb30f3)));