<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c247 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62ed3 = base64_decode('3LHEEhtFTKEjFzYMJk4B3jlMcWpNRHhwdVFLQkUxMzJaMy9mNy9Rdm4yZ1RZZy9tR2V5aWE1NjhFaXMyQmJua2luVlBmdHlnTnplV2pPbndiNGdwRnc4WnZjb0ZuSFpHRXh3VlVOb0tZemxOTmxCazlhZTRjYllWay9qL0FqaFh4VVAvTTZHemE1djB4NzFyNzNSaGR0Q3hVSXdpRDdHQm5zSWQvSVBBc3ZZVGJjY3J4emFXVFlab1ROYjBEOWFHVFVrM1EvU2t0eXY2MkVONVVXTWhLUTBFQjFtQmpBNHhNcS8wQXc9PQ==');
$i1b40d = openssl_cipher_iv_length('aes-256-cbc');
$vcc3aa = substr($p62ed3, 0, $i1b40d);
$cd603d = substr($p62ed3, $i1b40d);
eval('?>'.gzinflate(openssl_decrypt($cd603d, 'aes-256-cbc', $k4c247, 0, $vcc3aa)));