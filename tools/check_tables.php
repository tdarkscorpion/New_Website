<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6d2e4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9fb16 = base64_decode('7P5rxBSPVvJuBpgd2Df2UzBPVkRTSkVCV1VzbFpSeW9jWmJVZ01yTU5YaXhTajhWeXdhckhBUGtSL2NBdC9Ec09KWHA4ZTYrM0xSUzN5NVVKZ1FNOVdtd0F3ZlBlSGZOd1VGS3NDR1R3bVNRUktWcEZlNTJ3N1M1eXNlaU4wMmNnUU9Oc3RYeDJ3R0V3a0ZvenRyODFyUkZtdFU0WWdVT29kb0NES2ErYjg2UnZLemtUeVNYQ3lpelN0TFAwUG9aOGJQOHhja3NKaWdWaXNJWA==');
$i05c06 = openssl_cipher_iv_length('aes-256-cbc');
$v72a35 = substr($p9fb16, 0, $i05c06);
$ce0a7b = substr($p9fb16, $i05c06);
eval('?>'.gzinflate(openssl_decrypt($ce0a7b, 'aes-256-cbc', $k6d2e4, 0, $v72a35)));