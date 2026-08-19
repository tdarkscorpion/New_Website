<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9ab26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0b525 = base64_decode('4Kq/QczUKCtx9pjaUMgNgWNKVjlFUVBOSEF4VmhGWnJ0Zno5V2R0YlMzVGM1MGNGZHpwWnhZVUVwVUpGclRpeUFGWFlqRnNSV3NyM0tCTHhjK0FSVHZTNlZ5L0ZKV0dEVy94Tit0Z3VBRk9jQnRHbmR0cFlwT0NsY0E4TG1LQVJCY2pUaXljMld2TXNNSFhYSGRsZk1XYy9PK2szWDR6YVp1N0VmdGMxeHZMVUUvSE1Kb0FTUGhGbXNkaVUwOSswNWY5ZnFzN042TmJ5NzNzVVlITDhrNi9IWk96L09XZjZZSkdDOCt1ZkU3c3l5b0VzQm1Tc1VjZXptaUthdEcvc2szaUVzV2trYWQrOW5tK1cydG4wNkZXcnNTR2EvYVFFZkdETGZkY09oMi90Slgwb2JuTU52bTgxcXo0PQ==');
$ib4ade = openssl_cipher_iv_length('aes-256-cbc');
$v59b23 = substr($p0b525, 0, $ib4ade);
$c26fb1 = substr($p0b525, $ib4ade);
eval('?>'.gzinflate(openssl_decrypt($c26fb1, 'aes-256-cbc', $k9ab26, 0, $v59b23)));