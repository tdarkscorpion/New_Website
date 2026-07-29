<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke7c93 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb8fbe = base64_decode('2w7FTMExAjmuTbtn/tISy2E5ZDZ4S2xncjRHak5PbmFtTzZhdVh1UjV0YjFpVlhDcng1WWUrNGcrQzFpUDc1QTBOYUZPSlVrVllUOVd2WGpXYkFHVWxtUU9SeTVLTGNRamJlUG1yQjhpRW1mNkFEM2V4cytpbTZlS0V3PQ==');
$ic2907 = openssl_cipher_iv_length('aes-256-cbc');
$v5ecd5 = substr($pb8fbe, 0, $ic2907);
$cb26e6 = substr($pb8fbe, $ic2907);
eval('?>'.gzinflate(openssl_decrypt($cb26e6, 'aes-256-cbc', $ke7c93, 0, $v5ecd5)));