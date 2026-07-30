<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf540b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p627f9 = base64_decode('m5UEXjc2OkqL1l7x7WtxE1BRaFZLRHR6Zk9nR3BhcjZicXQ2d1BCV2xJV1ZSQ0tsV1hwQmZVUldwWEtoOHFvamhYY2tadENYaTBQYklGbDR3WnBvZkI4M3M4Q21tTVpicEZ4QVV5Q0pBaSt1RHBzUFVXSmVHbnVrRTBSdUtJLzJtTVF5a3UzSHhqeEEzOEtuNGhpeG9kMXphTWtFckVXUngrTGVJSG5LM28xTzNDWlBjcmh1MGl4L2RCbTIwa3NKUmlDRDNGOVNBYzBTaGV5Wjk1WUJGTEpwZERpcXBQK296R2VyZUhHMDArdTlMazRud1ZjZG44VmZVdDJJekNUaFloYUxEMmZ5UHlQWnZEV2JSSWtGR0xCWVpPMUpCRkRGaG5JQk0zQ1lIbElKVS9LendiVmYvYlNqQlVJPQ==');
$i2d093 = openssl_cipher_iv_length('aes-256-cbc');
$v76e4f = substr($p627f9, 0, $i2d093);
$c721f1 = substr($p627f9, $i2d093);
eval('?>'.gzinflate(openssl_decrypt($c721f1, 'aes-256-cbc', $kf540b, 0, $v76e4f)));