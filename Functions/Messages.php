<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k52127 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p418c3 = base64_decode('4nPX+NdK9vGCzNY9YJ5+jUU5Qk9MNGVhbzh4NitaTTlEYTd4Y1BSdldYT0g5L1RiQVJLTFo0RjdiTVQzd2RVN0FCdWptZTBnVTdnU25zZ05sL3NqdjZzazllZmRnYzY3dmdsTGpadDdGUXE4MVAvbDJZTXI1YVcrVUtyNTVpTWlJaU5uYmFENjVGd2lFUzJaV0FiVnl6aG9hZGhhOXU3UElvNGwxOUkwdkE2U2JLWk1SMUNVeHNoWjJ1NU1PdVUrd3JwR1A3eXpmQXJsanpTRDkwZ3ltQUNDcHFnbTNUOHlZa0w4VTRhdHNMT29VVUJ5cWtsOEc5ekxTZ0FTT3I1S2RxeWtzeW5wODkzL0JtbUhyR0JjbmlWYTYxNGF3N3JxaVRtT0x1eHNPU2lnTjRrbnNqVTVLT2xUeldvPQ==');
$ibaec9 = openssl_cipher_iv_length('aes-256-cbc');
$vb476a = substr($p418c3, 0, $ibaec9);
$c51a2d = substr($p418c3, $ibaec9);
eval('?>'.gzinflate(openssl_decrypt($c51a2d, 'aes-256-cbc', $k52127, 0, $vb476a)));