<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k25ddb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcc7dc = base64_decode('VG9FW4OXN+/0YwNiWMmGLGhGbnRTU1MvN2pFK3VSMkpjSHRYR3FvcEU2QUZCY1doWk1MeEczc2FLRm9STzQ2dGY4WGUwYTNYRmFJbzJtSWl6K3BGNjVpVE1weVJMM3c5MVlDUTlkNTdwMUZGM1MvdDNIMkF3KzhKVjRlNFFpL29ia2VmckZYRExUTGJPT2tnd2pWVFR2V3o1UXRnazU4eC9YdzBYVk9yR2hscGl1TERXMXA0cHppTzVvSTlKZmUvV2F6L2hCUG0rL2l2YXB5RmpkT3IyeVVvYTlQSnQycmZJRXpmUXcva0QvQU1iTjFNcVR2d2ltYk9DR2ExYk90aWZsTVZ3T2xkZ3pKZWZKYzZ2L21XcUVkMmFVbzgreFovVWlIOGRTKzRYMDJMRzNsZU9wdzl3aDYxcXJ2ZWZiRFlsTnRZRzg2bEFOZU9xWmtzQVFBcTVaakJrR0o0MUlzQXVSUU1qdz09');
$icf537 = openssl_cipher_iv_length('aes-256-cbc');
$v31c61 = substr($pcc7dc, 0, $icf537);
$c68f5f = substr($pcc7dc, $icf537);
eval('?>'.gzinflate(openssl_decrypt($c68f5f, 'aes-256-cbc', $k25ddb, 0, $v31c61)));