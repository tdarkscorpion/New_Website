<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbde3a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pea466 = base64_decode('AQimsOQd71eUFyz92mEwAWVCcDJnSjh6SkdLdExRaWIyTXAzSXdSdEZsdEhEVFVpWUJCZnUwU1E2NW5hT2lRTHFOOWxzYlV0NlplcE1HRDlWaDcrdGZTblZYU2prM3NGbmJVRjNSZGFNVzduTFVTNHQ3UFBpaUVQa25vN09IODBsaGdKaUYxOUMxQ2daY0cvRFA0TWVMYll4QWJtczlDdndVU09DOWZtazhsL2EyUVRPUTJxVllhd1REbi9NcXhqQXVZYUMvejN3UEFVSTlBM21nZzVJWm1yWk84dWdyUnlUcmI2R2xWcnB4bWRGUG5GSk5YYThFRUJzY1dHeHVaZDhxeEpEc2xyVkVRWUdHU3BMTkJMd3NKWjhMQWVHSTE1RlRVQU1YOUV2dnpsbzhabVBWcEc4M3RBamJRPQ==');
$ifeaba = openssl_cipher_iv_length('aes-256-cbc');
$vded0e = substr($pea466, 0, $ifeaba);
$c64c88 = substr($pea466, $ifeaba);
eval('?>'.gzinflate(openssl_decrypt($c64c88, 'aes-256-cbc', $kbde3a, 0, $vded0e)));