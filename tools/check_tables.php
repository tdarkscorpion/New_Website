<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71238 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8f60 = base64_decode('LEq2RwGvH3Fz5TgGF1Tmyk9nNDR4THh5bGNHZ294Q1BtZEtqVWhHbUUvTFpsMWZydnVyMEYzTHNiMWVRZ2V5RmVPRnR0OFp3N1g2SDFrN0tFUmtRb3FxZm5WTG9UbXNLMXQ5eFlZQ2NxakNyUUN3WHVScjBxd0lWQ214aUtTWWV1YkJWK0N4NVBEQ2sySDRDTURmSEtKKzlnaFptdkd2cEs1d1ZFcGpHTEhxdExZbHRnMnpNS1VydWpJY0RvajA3djk4ZDZyMGIyQStlTXJXOQ==');
$i5f3a6 = openssl_cipher_iv_length('aes-256-cbc');
$v744f9 = substr($pc8f60, 0, $i5f3a6);
$c976a1 = substr($pc8f60, $i5f3a6);
eval('?>'.gzinflate(openssl_decrypt($c976a1, 'aes-256-cbc', $k71238, 0, $v744f9)));