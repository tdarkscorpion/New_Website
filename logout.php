<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7cd56 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ccfa = base64_decode('eQQNejvFKEmMeQdHWHUdP2Q1Y1RPYndWdjJYblUxZGk5VzNLRE0vYzc3T1FyWkM5Z0JmZUVoVVhDb01TMEF2L2wrdVRvK3UrQ0I1c2RJMXcwNUNhdDA3S1lOUDdQWHlVV2lDZzNrOENjMDJkYnY2cDFCOGlpOWNiVjhFPQ==');
$ifc4d0 = openssl_cipher_iv_length('aes-256-cbc');
$vee7db = substr($p2ccfa, 0, $ifc4d0);
$cf7dee = substr($p2ccfa, $ifc4d0);
eval('?>'.gzinflate(openssl_decrypt($cf7dee, 'aes-256-cbc', $k7cd56, 0, $vee7db)));