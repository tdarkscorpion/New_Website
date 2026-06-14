<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k74eca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p630a7 = base64_decode('V4oeePK/igccSAza4Ou3aWljaDlkbWlpY2pGU2E5Ly9GN1BCcG9DSzZSMlk3cFJSV1FiaitNcG1LMEFOcjFSQ2ZrdDBoaXljNzhTUG9lVVBZNW16eFRYd0tMUkpEODA0Qkl3ZjdyTlM0VXQzU3VnUmU0RGF3WDd6cjlCNUJqVHMyNE90SThyWVRwRG8wa2tJQVl3dVAzbU1wT0QwcEhPQk52TU9tdlhRYnpDN0FKWEdyUi91ekFoQ3RkTWJOVnFtMW82eDkrY0hzbFhmNzZucHQ0V3g1NzN1ZC9UdUgrSDlKOFAzM1E9PQ==');
$i8f44f = openssl_cipher_iv_length('aes-256-cbc');
$vd407e = substr($p630a7, 0, $i8f44f);
$c4e81c = substr($p630a7, $i8f44f);
eval('?>'.gzinflate(openssl_decrypt($c4e81c, 'aes-256-cbc', $k74eca, 0, $vd407e)));