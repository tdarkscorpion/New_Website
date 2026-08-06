<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k81f5c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4bd22 = base64_decode('T4Ua6tS5pp0MTiR1voY+HXBhTUdhbEtkZkVmMG5lNDgwVEZ1aTZGTXFuY1RtZnV3Ny9aZXo1eG5yejA5N1BqN0FRSHIvTndjcjZNRjhBWWMvQU9SOWJQVWFyWDdwMVZhK092V2pVN0JnRk9jTVppZksyaE9SbVEzV1VnSmJYRVhPTkRSSlRlSjg2Uk5sUHY5Rk1Bb1dsVy9GNjF2Z3RqRU9BY2FGdmt1ME1GTGRVRnZBSkU4Vk9ITnVzTEZ5V04vcVEzOFdhNWtoeUtDTDdrWC9MR0JRcGE0ekphYzMwdU83NHptK1RZcDFqelgyRUU2c0J4UnFvQzdNc2VETG5ndE1TWktjV2RRS3lQNVRnRlpRbGFqODIwbXV5ZXhmdXRiSVlTVEpKZTBuQmJNS1l4UWpYTys4YlNJNEhNPQ==');
$i17020 = openssl_cipher_iv_length('aes-256-cbc');
$v05cfe = substr($p4bd22, 0, $i17020);
$c040b7 = substr($p4bd22, $i17020);
eval('?>'.gzinflate(openssl_decrypt($c040b7, 'aes-256-cbc', $k81f5c, 0, $v05cfe)));