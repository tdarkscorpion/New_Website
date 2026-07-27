<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8a178 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p251cb = base64_decode('ftM/uUa6yejEtTQT1hBywXJuWW5JcytxK2xEUHVOS2kvMVRCMDVBRDBOdFR1a3lTTjdBOWF4NEkyRXpwNGQ0S2lFY1VLZ0xza2ZkdkxGaFQyczIzZzdqbno5a0xQeW1EUVB0QzVMN1JQaE0xL1ZaL2tYL29pYTczdHFwNDlzOEdpQitYeDVaVUtmMkl2bktveW54RkFsazVpcmhBa2c0WS9Td0xKMUFLenJvNnZ6STRSdWxrVFJVWXhzWitWY2VlWHdKdHpVOHZrY0FDWGI2TEhpT3lzVVBGRmExZkxEbFRxMFNYd0R5ZnkrN2lVWTFzNG9QMkpFb2NqN1FNbGh0NlJtYkpMVDRBMWltbEs3S1J4OWlLKy9LSFFXb3N4RHkwZHlQdG9xZ081QVJ3WGtqV2xqZ0M3c0VjL1FvPQ==');
$i4b40f = openssl_cipher_iv_length('aes-256-cbc');
$v1c00a = substr($p251cb, 0, $i4b40f);
$cbc5c4 = substr($p251cb, $i4b40f);
eval('?>'.gzinflate(openssl_decrypt($cbc5c4, 'aes-256-cbc', $k8a178, 0, $v1c00a)));