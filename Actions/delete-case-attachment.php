<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaeec2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f3ac = base64_decode('XXVbJ/TitB8FT1hYCta/XS9DVWZnc2hablRYczdzOFl4anRXTGRDQVc3ckFLWm11eTR1ZUk0ZFBFNHNyNXZDa051bVdOckZSU0VRWHRFUHVKNGk1bkJrVXFuWXhNUU9DS1krRnFqM2NUMjBXMnBNMmk5NVI3cTJHamhqTjh6NlNKY2tlQU5PVVFweXpBaXdiYm1ZRWM3bS9QdTFSNGdtUzVweWtHeXdrT1RaUEdDV0Z0cHNBNzJkZ3h0bHk5OXNrZ1VKNWhLUVRPOTZsTXhPVjMrUDFzTzE2U1NPWDFuZjJSRFltc3plTmZ6SER2VUQ4bCtTNEkyZlh1RVJmR1EyaUcxMlF4VjVCRlp6T2RLRWhyZ1Z6bVdYbFFqNTkySE1DWCtZV1ZkeW5kczdZbTkyVi9lZGNUQ3pZdUdyYWVQN1BlNHhkTUtZL2lBRFpSTmd4');
$idfd82 = openssl_cipher_iv_length('aes-256-cbc');
$v10de9 = substr($p6f3ac, 0, $idfd82);
$ce7b62 = substr($p6f3ac, $idfd82);
eval('?>'.gzinflate(openssl_decrypt($ce7b62, 'aes-256-cbc', $kaeec2, 0, $v10de9)));