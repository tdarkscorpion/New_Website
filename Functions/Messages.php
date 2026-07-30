<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaac07 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8a50e = base64_decode('ugNtEkooS6pIwwCYNz33XEt1NzdIREliQ0xPc2V3RTYvV3IxVk9BeHRuT3JNOUZvcmFrWEpLNU53TUZubUxYYWFCQnpwdkhPVDZxTGRQWXJLaDZXbWM1cHJMbGtrQjgxVFlzampNTFhFaDdsUWZCL2J5R3Vqa09LbHRtV0NQYnJkNFJ6dW9BQzFjSitMeUpyU0tkcG9QREdudjNWWDdONHh5WSt6azhpZ3dwdWV2ekV5MGpBRkJoWEdkQlhJMGhTQ294Tit0OVpKNnk4amhqWWpiSTdlRk1TdDlhc2R2eDdMaG5XbFA5M3FLQWtiakhUMmxmVEg2MlVjS3lTeDNEMXhzT1RTNktXeHhFaE43OG5pVFVScXhJSFY1TjJmd0c0eC9YZlZneEdOd0wxMlc0Tk1ZKzE4TDFJa2h3PQ==');
$i78f54 = openssl_cipher_iv_length('aes-256-cbc');
$v59f2b = substr($p8a50e, 0, $i78f54);
$c9b3d0 = substr($p8a50e, $i78f54);
eval('?>'.gzinflate(openssl_decrypt($c9b3d0, 'aes-256-cbc', $kaac07, 0, $v59f2b)));