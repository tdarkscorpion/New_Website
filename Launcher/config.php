<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5298b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p36268 = base64_decode('h9na9VvXjuuO0bv5dP9RJDNxNEdobzJCaUQvZ3FUbjJpZVBhemhiMWFEMEtmQ1Q2NGhVOTU3WGR4alZQWFhkTmdBcXpURkJ4c2NVekJhK1ZiSDZ5YkhsWmErdkF2QkYwems5Nnd5dkF5dzlLaXNKU3czUnBabWxNZTRJNGFZYUZFNUVpTHFJK3dSYityUlRDbTBxbUpGelBxSGlTeHV2S1BMdGhtOUpSakNQZ01MNzhlVmlTcWJaTVRpa2d0Y3BBYmFia281aWZIbHZvdldmWVdpWWcwY2E2UnN5NUk0czFvbTEyTzVLbURHN0hTV0tqZm0zWG90VjYrU051VElXSGFUNlM4bVl6Sk95RWRCYUpNTlFxL3ZUcmlIRHBmbzE4V05BcU1hVzk1ZDMrcmhUSmNzdWY4RlZtL2RZPQ==');
$ia0fc6 = openssl_cipher_iv_length('aes-256-cbc');
$v7e1c2 = substr($p36268, 0, $ia0fc6);
$c711b3 = substr($p36268, $ia0fc6);
eval('?>'.gzinflate(openssl_decrypt($c711b3, 'aes-256-cbc', $k5298b, 0, $v7e1c2)));