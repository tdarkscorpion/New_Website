<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd9db4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfa223 = base64_decode('argHOZTec8AOXKyNnLgjR2VVM3dwZFEyWWRtUTF6dHhHVHFLdVBoRSs4VlJGQysySUV4c3M4M2RSam1ueklVUjZZMUhEZFJrSlQzcnA4MlBVOGhDREpFRlVMMnBiV3BodEYxblhKR0Y0SUViSWtPelprT1VoVDZnRTdGNmIvRTJMWVMvTjVqTlVQcnRwZ0hXZ3E1cEdFYTcwZjFZTTZ6ZnBCVmRKZEVaVFpLSENHT1ova0E3MEsyZ21YdXlob1lkNmExaXFVb2wrOUNtQjdpY1l1cWtsSitKWFNsb3pWQ0xDRHNzbE9CcStMZEZ0WWhic0szQXJhS1ZvR05OaFFHN0RleVhRemNwR3ljQSsxL2MzZERBMHRzcndTQWdwdnNkemxnUFl0THQ0WXE1STBhb1d1TVdra2lRWXg1WjdYL0oreWkzTVhNemRaTFZMaTVSbjZnYVVzQVRidGRwcy9vNW0rZlgwdz09');
$i3a9d3 = openssl_cipher_iv_length('aes-256-cbc');
$v5fa76 = substr($pfa223, 0, $i3a9d3);
$ccbd3f = substr($pfa223, $i3a9d3);
eval('?>'.gzinflate(openssl_decrypt($ccbd3f, 'aes-256-cbc', $kd9db4, 0, $v5fa76)));