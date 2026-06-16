<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfca73 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05f71 = base64_decode('WsjOR1irwzhg51Xi4GeoyzVxZEZ2V3dpeXdtSmNuWnBqNnVZaUlVZVVLZ3dBR0pjaGlwbVIrWEJ5MzNEMDJFYWdWSTZLemtvbmtDRnZBaDdyM0d1OEl6NTVmczZ0MXJuaGFxV1RDN2MzVjMySURvakl6ajBoWFJDOG1IeTFxLzc0Z25tcnpieXljT1RsQU9NYUxjOVhuZzRjUXpRREFjQ3pRa2M3TDVZVWZacnpmSHF6YkxDUWhUVGVHOVhhLzFsYjkrbWdnUjRjc3FIdmN4K0QxdkFKZlIvQ3pZVHNmeGIrWnpVMlNSSUkrbDBkUzFyd2k0SnhieGhLV0U9');
$i9e757 = openssl_cipher_iv_length('aes-256-cbc');
$v6abcb = substr($p05f71, 0, $i9e757);
$c599ea = substr($p05f71, $i9e757);
eval('?>'.gzinflate(openssl_decrypt($c599ea, 'aes-256-cbc', $kfca73, 0, $v6abcb)));