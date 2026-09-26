<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k389cf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5c9ce = base64_decode('f8pXqqanWHKwrnhoH/wObWEvTC9hK2h4bVdMVUtsRHNQQWxPS0NFd3pFRnRGNHlwWjRIM1I4TFl3Z3ZybmVxQWlHQmVORUg4WS9CR2pKNk1RL2FrbjR3MG1YckI3eFpNQXFiTXUwN2cyU3JZckI3NHVMSm5jakNSa0xvZUlRNHIzSmRQMkROanFPSzlCMVQxNVBEZUJsK1ZPV1c0U3lSdFVjald1cUpoWFNrdGlpRmZ1amFKQW5pcXVEbHBndkNRYjJzZjF1SWNqMlB5Z1FpRVhOVDZGMXlIQnRkYXN4c2w2UktQaXhGMXZZYWdzUy9JaHBmU3kxZWtDUkVJVFlQd20vbTV1bnJJWVN5MWtMRnZjekJ6MVlWaWVqd0sxaVhzOUhCYjQ3QXhRc2ltYXp0blBTWDcyMU40dUNFPQ==');
$i38f5f = openssl_cipher_iv_length('aes-256-cbc');
$v56c2e = substr($p5c9ce, 0, $i38f5f);
$cd02f8 = substr($p5c9ce, $i38f5f);
eval('?>'.gzinflate(openssl_decrypt($cd02f8, 'aes-256-cbc', $k389cf, 0, $v56c2e)));