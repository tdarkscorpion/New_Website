<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keb7c4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7f2ee = base64_decode('g/OWPNlJiWceAq+dCe/BB2RQcDNWcmNsSU11VmY1Q0ZlbC9PN3lBSTY3STN6TUwrT1l2MnVoblZwZTU3UHFOcHcwNDIxMDVUSUFRK2toVkJjK0RHY1A1UUVqdVFqc3VzVXFQWXZSalZYQy9sNnhnT2NnK1JRU1JMMXpDWWllUmxhYmw3Y2hjV283T3NNUjRaVU53YkV3TmxXM3lLZm53Mys4Nkp0bU1YazllQUY3dFJQakxIQXZBSlAwdDVRMjRoMnZ3cnZJWnBMczBybTZrVElucHNRT1BrVlcydTJoTWF3dkNtQitkU0dKM3dneVB1RW5GZDBFbUc3aFFxb0xUR2k2OFQrMkd5WEdUc2U0SlpMWjBhQnByZllMbkdiY3BKVmhGSkdPaWExRWV2TWVmQjl4YnJwdTFwOTdvPQ==');
$i1743e = openssl_cipher_iv_length('aes-256-cbc');
$v22351 = substr($p7f2ee, 0, $i1743e);
$c61e6c = substr($p7f2ee, $i1743e);
eval('?>'.gzinflate(openssl_decrypt($c61e6c, 'aes-256-cbc', $keb7c4, 0, $v22351)));