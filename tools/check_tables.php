<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0ca0e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd8f13 = base64_decode('s8Y3OCIrzW0O2fjsczNtZy80c0FkeHNKbHFvSCtxem9WN1JnWDhFZ3pMbmpFek43bzMwbzJlSDdyMzRtelFVRE9SdDc5dy8xMzRpZ0RTQmJHQnE1WCtQelNpOFNST2ZPUWUreitYWjFOYzF6eksrNEQ4K1A4ZkVVSUIzQXFYTkpWdDg4aTNLZ3FNcytqcHVudk03QTFGSFAyVUd3LzdkNDlZNzBVaGppZWtmWStMVXI3S2xQRTg4V2E0Mmc5UGNJN3NCRmpRRlFublkwdWNKeA==');
$iec4a2 = openssl_cipher_iv_length('aes-256-cbc');
$v3d51e = substr($pd8f13, 0, $iec4a2);
$c9ca72 = substr($pd8f13, $iec4a2);
eval('?>'.gzinflate(openssl_decrypt($c9ca72, 'aes-256-cbc', $k0ca0e, 0, $v3d51e)));