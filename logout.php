<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k32533 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe7a99 = base64_decode('No5FauPPsmaaphkgHPLP70wrNWFpOW5sQWJSNXl4ZC9sREw4L0MyYjRtOVcwa3RYUERHTU94cm9iNTBadzBQemF4L0Q2cDdLZlFBaE82WjRWbll3WjNoejFXNGc2eUpxaGs2amg3RU5jZzByNnR5VHZJSEZ5eDF4RzI4PQ==');
$i95f8b = openssl_cipher_iv_length('aes-256-cbc');
$v0816f = substr($pe7a99, 0, $i95f8b);
$c7d117 = substr($pe7a99, $i95f8b);
eval('?>'.gzinflate(openssl_decrypt($c7d117, 'aes-256-cbc', $k32533, 0, $v0816f)));