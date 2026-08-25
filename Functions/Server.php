<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k173f2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbec2c = base64_decode('IO8YPngDUw7LI3k8gke1SmJvTmVDdERJVUJhVzRuVTBnUEM4L1BLUUVFc0ViSnFSSkJYZzRsZUc2azlObmdha0YvZmw5U2VoL1l0dkZVdnNDd0JXRkhHS0R4Y01SK2hlOWdiZDV3Q3hISGQxaHpIenI2Z2E5TjFON1UxSm9aOFk5dThYRlhFRTVjOHJXMFZJdXI3ZzU0YTk5c2EzSmVLQU5qM1BxL1ZQR3BZT2lNY3lDMUNkYjhiclZsNGtHODJTSXRUczhVMkxoNWIycFA4cjFVQ0Vnc1lyeUJlUlhoTnVCQU50MGl2clRiUXdRTVJMRDgrcXl3Uk9aSnBMR0JXYTgwdkNJNjBRU3JXcy91VVlObXVSUEpJbVloUDJDRjFob2xlNkg2UG9wQStmUDY1a2dvUEFwd3d4T3NjPQ==');
$i84cb5 = openssl_cipher_iv_length('aes-256-cbc');
$v46543 = substr($pbec2c, 0, $i84cb5);
$c19a06 = substr($pbec2c, $i84cb5);
eval('?>'.gzinflate(openssl_decrypt($c19a06, 'aes-256-cbc', $k173f2, 0, $v46543)));