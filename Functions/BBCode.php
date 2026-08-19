<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9cad2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6bc07 = base64_decode('D6rmWqKVxTb9Qx6QF8qj4lcwWlVsQ0F6N2gxM0R5OEw2UnVLcFNycnBjVnBqWmY0NGpQaG0xM0R6NFF3SVNvbWltSFR6dG5ZWEMwbklKa0t0c04wbURwdzIvTUZFQmZ2WGNuaUg2Q05PYlNrNXBSMjFqWi9wd1B1M2hHZ3M5V0RvMnJJUzJIaGVhOTkrQzB5MDRnb1NsYXRwaEU4aUVGY0VzZERtTlVRRWlPZFpBZGM1T0x6Y0tRdHh4ekU1ZFFuZTVMalIvd0RwUDJWcEtZVzM3VSswYkVRSmpKRVUydHpTOWU1RTZHQ2dzT1UzaHpRVEZ0T3NDTnFUZDYrbFVIczFWMjJoNGlwQTZvOWRTL2RhaHpPTGRUTmlGZkwxZ1R0RCtUNmFrckZRYXR0QnZlK2RzdWpyWU5naEZsYWx5cTcxWkNGcEdDbFNBd0J5OXcx');
$i23cac = openssl_cipher_iv_length('aes-256-cbc');
$v6c8f1 = substr($p6bc07, 0, $i23cac);
$c29d9d = substr($p6bc07, $i23cac);
eval('?>'.gzinflate(openssl_decrypt($c29d9d, 'aes-256-cbc', $k9cad2, 0, $v6c8f1)));