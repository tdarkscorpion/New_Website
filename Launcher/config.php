<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5d159 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe6305 = base64_decode('BoduTxbc8hQ3Q1ANHfBOwzZRb0lZRWlSM3R4WHBLN0VRYy9NVkNXTGlScVJTTUYveUV2MkJLWjl1dHhEelNDODNpQ3NianlYaXhxbU1seithVk40azdkYkF3TUJ5Z256clJWNmFoK3dxaS9kdFpMMEFFbXkvdkl0R2RNbFJtRlc0S1MzWHBnbWtzYmJWTUFEOXFLdTJwaDU0cG9id1l4QkJKaXJLamxsSUdVRUZ6QnYwZjdOaEVQNXBuc1QxdUVycVJpemI1ZjBhSGRJTWNhbDZOenArcDFkRWdXTTQzOHM1OEZGNklFVmIyU0tGRWRXK0x2WTlFNm1zQmI1aHFxQUpGaVZlMFk2QWRPTE1VK0Jhdy9GWWcrM0pLUVhOSG5lU1RHWTl5TGxxenN6ejlTM3ZqaE5YcVE3RUVVPQ==');
$i98dfc = openssl_cipher_iv_length('aes-256-cbc');
$vbca82 = substr($pe6305, 0, $i98dfc);
$c7d188 = substr($pe6305, $i98dfc);
eval('?>'.gzinflate(openssl_decrypt($c7d188, 'aes-256-cbc', $k5d159, 0, $vbca82)));