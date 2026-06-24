<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5e8a7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe9e84 = base64_decode('1ZjDZbHgJFsQEN6bh5+xzmtJYXlqaGZWeU8zMGlQcCsxa01Id1FML3VpM1RYT0R0NnQ3RzdZUkhJTm9wcHpFL3BtRWxyVGloR2YrUGdpVW1CU0gzdUl1RldBdGJQY0M5aUwzZW5DQ0cwcGExT3VVNHQyVmRsdWc5L21zbWhWZDF2czJaY2pwblVDcDdrNkkvdm1FTFJsaGFrYjV3R1dqQ1V4K21QM0lFb2twMkpqcURDS1ZrSEVQUVowb1ZidDJSM1VZRDl0YWNFcUowTlhpWjVxQkVzd2NrdjZYNmJzSnVNTmdsTjVIK2FtRTFZZXBtcmZRY2Vublp1VjFTLy9waCtDMWVzM3E5NjBPYmppZUpSdmFJRUNINmlFaGdia2pWT2M5UkE1ZGp0RWlrTXhheC9EdFJOVXVhZFMwPQ==');
$i787a3 = openssl_cipher_iv_length('aes-256-cbc');
$v95a1e = substr($pe9e84, 0, $i787a3);
$c1c952 = substr($pe9e84, $i787a3);
eval('?>'.gzinflate(openssl_decrypt($c1c952, 'aes-256-cbc', $k5e8a7, 0, $v95a1e)));