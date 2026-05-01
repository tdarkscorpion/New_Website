<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k414aa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb9e1c = base64_decode('MiATmO2exv1Iz388gmPkunFMZ3Q0dklIRGFLdVdJTnpraWUrTitVQWhXY1RtL3EwL2NvV1YxUjJaTDEwdm9uYWxhdkNuVUlJdStGUEowb0dDNkNEYzlFeGVua0lTcVNjdVNJNWtJOTMzQTN0ZnlQcFNoMDFHZzl4VVljckRQZ3RCOXZMRXJJZ0U0OG10OFpaa1lEUzg5MGhXU3hxNDdCc3UwZXIwV0NGR2gwdXRIck15ZmIvZG94SUl2dUNaaE5DR1lkVHdlcFJ5Yzg3RTNGWFBWanRnbVdIdnpBcFkwZTdJQmI5cXc9PQ==');
$ie4be9 = openssl_cipher_iv_length('aes-256-cbc');
$v3455e = substr($pb9e1c, 0, $ie4be9);
$c81ddf = substr($pb9e1c, $ie4be9);
eval('?>'.gzinflate(openssl_decrypt($c81ddf, 'aes-256-cbc', $k414aa, 0, $v3455e)));