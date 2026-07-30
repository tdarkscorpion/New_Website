<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66f82 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5540c = base64_decode('XqxnQeqvKld9AmvEsBuklmFkOXQ1R1UzTTdjeFk0SjZzdVBzNzkyZ3BUVVpNWXFaZlN3blgxelhzaEFaTkJYL1lybWRCbXhwdGV0ZTBRREI5WURsVlRvcmZLSU1pTHgyME84RVFWcXU1QnNJRDhtd2dGUXJ1QnE4WU1RanJNQ09ROGNYUytXUzVZVkRLNENUdU5kU2l3YWhpdVFKNjJJdDBxYk9jaGlRUENsejhTYVBZK0VwTjNmVk1BUWlwa1h5MVRHNUYrV0dZd3RQTEFXNXVheUJSNkZwcXVNZ0FRcVRzNmpTTTVsc0F5R0dOVURGQ3l3eDdnV3JNTm5PQ0RubGMzdzJSTDdHSDdHT245NDI=');
$ia5a69 = openssl_cipher_iv_length('aes-256-cbc');
$vf35e8 = substr($p5540c, 0, $ia5a69);
$c1905d = substr($p5540c, $ia5a69);
eval('?>'.gzinflate(openssl_decrypt($c1905d, 'aes-256-cbc', $k66f82, 0, $vf35e8)));