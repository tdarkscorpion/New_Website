<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc16b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7970f = base64_decode('VmlrShAWD69TWqrowiy8xmZhMGRxRlRxRjNSeFFCeUg1RDNMc3ZLR1licGFlWXpaaHVCNk1HR2c2NTJaSW9RejR0MXhxYlBsVDBpaFlyUUtvbklHMmxoQjdKcEducDRGQUFTc1pIVitLTUsyRm5NTEFZR1N1cTY2VkNvaG5lTkpmM2pJL0g0VnRsK1A1Vko5ajJxeFNHd3YrQUNGb3MvaU93MUlrM0JBdjNYaC9QVzU2TmFtRUpVeFl3R1l6cnJoTXhTV0VDRUJkWGdHQU8yWWkzYzdrTktPcU5uMkZsUXBGNStpemRpQnF4WWZWMXk0eWs3MW1CbG5naWdSRWRzZzV4amFmUFllcmNKU1FJWkZ5SzBseTFyclVXUWxlbHp3bktoTFlIaXdVRTZuNmdzbmc1RVpwSklVWlA0T2dwV3RFekpYdTRWUjlrUnVHQU9M');
$i67f07 = openssl_cipher_iv_length('aes-256-cbc');
$v7247c = substr($p7970f, 0, $i67f07);
$cdb416 = substr($p7970f, $i67f07);
eval('?>'.gzinflate(openssl_decrypt($cdb416, 'aes-256-cbc', $kc16b4, 0, $v7247c)));