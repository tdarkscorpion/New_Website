<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k05503 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pecd0a = base64_decode('qJRPUpeN5YH+hJk0baYjtTJsc3crUWFIM1Z5ZHRFZ0hyK2VUYWpPc1NaOEpBdG9PajFqMlFPZTNmQ2pzTjRLdm9ZbWVyaDUza3oraThNV2Nva2lQQndNbFVqM05ia3oxc01EcWxERzlzOE9GL3NuS0pBUmM4dXUxclYySWhveVZxaDhJMlhPVFF2UmpCd2o3RVdyUmNpbjZiNVExUktTVjlRSVpFclVoc0wzajR4T1JmT2NseVNiVUxETFl6bEdDVkFHV3Vhb3lZNG1abUg4L3JJcjJ5cHpjWFcwOVhyNGJYM0RRdmZJTnhNNEpuMXZtVUJrbG9jVjk4OTRmNWh3NWQzVW9vTTdtVmxMOXpkVUJwSjRIcG1la1MxR0NVMUlabnZFMlE4a1JkQllKVTBvazY5Ym4yVzFrL0JZPQ==');
$i0c6b0 = openssl_cipher_iv_length('aes-256-cbc');
$v44e06 = substr($pecd0a, 0, $i0c6b0);
$cc20ce = substr($pecd0a, $i0c6b0);
eval('?>'.gzinflate(openssl_decrypt($cc20ce, 'aes-256-cbc', $k05503, 0, $v44e06)));