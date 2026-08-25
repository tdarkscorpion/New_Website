<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5727c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb7a56 = base64_decode('iUpQqkvnV6xocMsPcK/3Y3ZOZTJWRStTTjVYNERsam5Db3ZZNVNZbGZUZG5WOFIzUmtWM0FwK1FDcDRpNkl0eWpoL2JoT1piaUtHR1U5YmFJeDRWZlpleVIzaytmdE8zcEZZdisrWitobEl2VTNzYjF5ajZkM0gvU0ZUWGtwbUxIVFZoRXpEZHg4UmlkZ3Jjb08yTVhJVytaM1N5VU5jVUNjSEE3RE1oZi90Y2djV1pPcUI2Y1k5RWRvc0hqMTUrb0VHMGFHTkViUzZzaHd3RzJKYnZrZ1FIRkFac1RwM2tlTWZzam5HdjY2c2dCQWZKejVSTUNRWWF5eTc5dTR1czV2QjA1RTBvdlFldjJCelVYRDZPc2hjY0FNWFNlNSsyVFM3QnJJOWt6S0NmcWhlc3FPdm1Td3R2d1dPK1l2VVV1OWlCa0hpbDRUZE05TnRR');
$ibe699 = openssl_cipher_iv_length('aes-256-cbc');
$vfb0ce = substr($pb7a56, 0, $ibe699);
$c73762 = substr($pb7a56, $ibe699);
eval('?>'.gzinflate(openssl_decrypt($c73762, 'aes-256-cbc', $k5727c, 0, $vfb0ce)));