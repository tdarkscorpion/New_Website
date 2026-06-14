<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k703ed = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38c58 = base64_decode('zQxgD+g6ig0rsEC9iIGvy3V6TDNGMFhlWmNFS1V6eGUzV0Y3bUFMemthL0dBOWNWeGtYYWU4SmRhcXBoYTYvVDBUeTYzTk5ZSHB6cHlWZjFkUFJGY2dVb3BpcUhmWkh2eGVqMzlldEhhZzZWMDdDQ1ZqL0Y3TUJVVStlYk9GWm9YQ2JMemorYllFc3ArSWJ5Z3lwSm1WUnMrMjB0aU5VY21JR0JxcWRFb0NhWDhJKzZOVFgrb05kY2c3QjFrQ2trc2FUcXRRcmVocTdydWdhbGNEcUpYZG5nei95Z1JqdndDeXdyc2JodzNSL3pzTThHMGVqbCtSTlFpd0FuNld3YmFBblpsWFczY3V3cCt1bTM2dXh5N0RTdERTd1BKZ0Q1MzE4TE10MFhtV21GU20ySlQxWXd5QnBwYXRBSkZEQVp0dmRISGxUTTVnOG56WE11');
$i3fe73 = openssl_cipher_iv_length('aes-256-cbc');
$vcccac = substr($p38c58, 0, $i3fe73);
$c91b87 = substr($p38c58, $i3fe73);
eval('?>'.gzinflate(openssl_decrypt($c91b87, 'aes-256-cbc', $k703ed, 0, $vcccac)));