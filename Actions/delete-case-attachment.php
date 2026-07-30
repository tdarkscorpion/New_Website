<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k20b53 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd1e3e = base64_decode('m8Wv0eyfg45hej4yqRi6z2NzYThNVkIwQUtpRE9uZkVmdEs1VlRoYjRPN21GVkdXdjVVQ25neGN5VVBPNEJ4SnJqTTJvNGxydHlJUkpPNG1Idlljem1TeU05YU0wU0dOZDFYaE5ySFVmaENMSkc2M29YckMrR2lNSndmMkl6dCtUazFsbGRDaGlwa005RlBFeFdxd0dxZ3RBUDkwVXpJcXhNRU9aalhJYklCbDl3c2t0RWZobzRTY3o1RWViSW9JVFVUcUdOSlYwNm9iS3prT0IxV01yRDkxbWpCTVMyMG9ncGtYZzErQy85UEJkUU5VNWRIRzF2U1dmUUgzTXZRcWhCU2M0TVZWS2oycFdMMjEvS3ltNWlPWElIU2pQVlJreUEzMWltZi8yOGQ3amxBWTVrVEErbTg0MzRoWkpaSzl3Ty9TOUlUcE9kMG1GR2hq');
$i2c8cf = openssl_cipher_iv_length('aes-256-cbc');
$v0f24d = substr($pd1e3e, 0, $i2c8cf);
$c31525 = substr($pd1e3e, $i2c8cf);
eval('?>'.gzinflate(openssl_decrypt($c31525, 'aes-256-cbc', $k20b53, 0, $v0f24d)));