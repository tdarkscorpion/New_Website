<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k00242 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd81f9 = base64_decode('nOl9kGp9zGC86IiSBHKiVGlFUHRBSmtva3NYT1dBUmFiRDkrSHJoRmtSUXpBOUVua2crWXdkN0lVWTVzNVRGcVlLbHZZc3BNZlZnWGVHNjFlcVkxd1dUOGpuem9NYUl1VUg5RTZvWGVxY2RJNkx0MDV1dmZzc1d4Vk5pRUd2QWRiNkVtZ25uN3hOMmpXeng5cE9FRWpkSFJQM1NyVnFPaGtVR2RRL3RaY3pNemdCakwxSjNZZ1RWVThNOUNRL3lON0s5NGdWSy9UaGpMTHdTMXZCRFRLbHVNcTlndHlHMzl6Slc5ZkdGamVUSzlMcEh6Sko4MC80VmY3bkhhVzJYclY3MVJCRm9haGx1OXB2V3ozeDY0UGRUbW1kVW01YThDZGk1WTB1RWN1SVh6K1FsVy83MHhpSnJJU3hjPQ==');
$i3bef4 = openssl_cipher_iv_length('aes-256-cbc');
$vf2e48 = substr($pd81f9, 0, $i3bef4);
$c951dc = substr($pd81f9, $i3bef4);
eval('?>'.gzinflate(openssl_decrypt($c951dc, 'aes-256-cbc', $k00242, 0, $vf2e48)));