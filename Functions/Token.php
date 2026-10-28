<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k50de8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p28b51 = base64_decode('VYIuS53NMRH4JNk+60L+y1dxa2ZzQ2p4U05iRmcvM08raFpBYVZKSXNtRFB2SW56S0NIRElIV1hOM3FKYVAxQnRlUWs1YnpUSzhSbjlkRHZmZnhBQmQ3VFZPZyswMDZ4MDVhZ3BHdHZXS09uTkFPcEtHVUxoSGFTZnhqeFNQb0VQTnlwVFk3ZllCZjAxMUFYckdQZ0kwYWxSTTg1eHRsK29nKzNUbjVadnhFalZhTytTMzBuZTN1NUFXV3Fkd2dyRjZPWi9ERDNDZVNmRTZZaDMzb0VPeDBFOUNZOHFTQld5WCtMMGFZWkhHbW1qbTZsa04ySGZtaktUZUptRHR0d2F4YWNEQ2JML1RidEs0aTczMERiSmtQSmpxZEU4ckNuRjJoVkx1cCs4SFdwbjdtVlczcXlGdjhuYXdNUHBTRHAxc3dUaE8wVkF5TUw3aml0eTgvVnYvQUQzWndzcldvOS9KR0FYT1hROGNPVGpMbTJxVUowUUZPZG5wMD0=');
$i47a2f = openssl_cipher_iv_length('aes-256-cbc');
$v2ecf2 = substr($p28b51, 0, $i47a2f);
$c761bc = substr($p28b51, $i47a2f);
eval('?>'.gzinflate(openssl_decrypt($c761bc, 'aes-256-cbc', $k50de8, 0, $v2ecf2)));