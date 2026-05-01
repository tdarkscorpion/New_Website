<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k83bb9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p28f49 = base64_decode('t2NWe9E6jskP6MPRsGOO43JYQURSekpRekY3K0dTQlRPUTdnUDZsMWhFa3JhWmdNZGM4NGdWTVZZbWJPUnFBZjUvTGl2NVpFYVIybXZRcVZkc2VLcXRHR0FCcDNmK2t1eWxlS2Y2QzEzVWZCWmx0c1cvSGtQQ0ViS3lsdmM3YnpFYzNTVHEvZjB2d3BQL3BLSUFnbENxaE00Z3I2MmtmMGRLdGZESnFWRG82TjZ5RktnT2hiMUUxRmVHM0l2aHdMaFRyeHVVVFdmZWU4QjhFZ1Q5czdEQi96czZPR0NLMnpKL0NWS2c9PQ==');
$i2e834 = openssl_cipher_iv_length('aes-256-cbc');
$vd4b1b = substr($p28f49, 0, $i2e834);
$c79ca1 = substr($p28f49, $i2e834);
eval('?>'.gzinflate(openssl_decrypt($c79ca1, 'aes-256-cbc', $k83bb9, 0, $vd4b1b)));