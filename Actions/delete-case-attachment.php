<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kedb28 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p280a8 = base64_decode('yT36yCpMPGJZLTz32RiKdzRZREJsNUtJSEN5U3lDY2dZK2p4UHVtckJBYnQ3anM0aDNsZmtrY1ZIVHBXa0VHYTl5eDhuSGhaS2NwLzF1a0VuQmFKVzYwaVIvUFNiUi9qRHZOUEd1eGhUZ01zcGd5VVBWTnN0akVQV1Nkc2ZtYlFka3hLK0xOZzB3bDlWM1YzR1lsZmFoOW5CcWVEM284bTg5bzMwMTlDazg3SmVFR2hyVVJLMnNVQU9wcmVDQUk0MU9jMjlzQThsTmZWbk5GU2ZDU0MrWktBY20rU3F1STU0TGlGbE5STTQxSEtqd0Rpckh0TG1TRGt2aUxYUVFRZithNHF1TVZLUHkrU0tDckVNOVJmcjc4eUo4eHlQb1FZV0RJb0dDQitXMXA3bFRsdGpyL0xkWCtDR2poLzJSZUZzSUEyQ09lODJDR2xXV2F1');
$i1f7a9 = openssl_cipher_iv_length('aes-256-cbc');
$v664cd = substr($p280a8, 0, $i1f7a9);
$cb03a2 = substr($p280a8, $i1f7a9);
eval('?>'.gzinflate(openssl_decrypt($cb03a2, 'aes-256-cbc', $kedb28, 0, $v664cd)));