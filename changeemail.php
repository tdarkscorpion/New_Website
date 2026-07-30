<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3c122 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9f204 = base64_decode('olKxrrsQ/o2rkL7dukkf9y9pc3FmQWRiS0tBdVBDUjlBK3FYVXE5MFVtVzFtZW5GNis0R1ZTNlNVczlWNmRudVhIWWhHcmEwM2ZOUUNpbGk1RkRpQjRoS21IT1RXcSs4M3M1Q1Qyc2Z2aWtOSEtQb2s2aW1vejJrOEdGNnB2bkNtZFE0ZkZMRWRkR0ZBUWpYMVR4aHg0bUJWb0NaRXYrdksxdnlrRDBXY2NFcUF5MjY4TERYcU44SS9lNTNaT1gyN0JPQ0JPR0wrYkRtTlhURXdMS2xvZ1pxYVdLaytsRjBTU3V1OXhYYnRpSkdWSlJKWEw1enJFbkRRNU5ETldoR0xzMmlaSkhwekZQL2lUMjVqdlZZMmNOU2p0M1JESFN6UnBxZGhYSE5VUUhXWGRqTVZHZWZCaDBLQkhwQ3lNUXRUV2YzUEluczU3SXZycE5USVQyK2Nua2g5NjZ2OUtCUUdlRkdPdz09');
$i798e5 = openssl_cipher_iv_length('aes-256-cbc');
$vf0ef6 = substr($p9f204, 0, $i798e5);
$c7948f = substr($p9f204, $i798e5);
eval('?>'.gzinflate(openssl_decrypt($c7948f, 'aes-256-cbc', $k3c122, 0, $vf0ef6)));