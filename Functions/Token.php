<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9fed5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7458d = base64_decode('ddAFvyT0tomL7IhDivihXFdYQzUrTlExYWliSnFiOVBVTTRUdkxQVEVYWW9WRFJDSnBsdnBUSzRhOFA0MGZaNTFmWkExckR4ejZNSm1SVENOVW90Z2g5LzVtWThjMGsrTVp0RkF6WGFSbDU0UkdLLzhLUGx6QUZZRGhKQ2dINHUrdzR1VzdwUkNsa3NuZDRhb01ORFVSSURPNFZ2cXRhZ3QvTitkdUpGb1NraEtFUktPWm9PNFlJbWNOUWZqRjI0R21jUTROalBYYkJESlJDc0ZsbktpaVYvTE44dzBBS2tjdmZOZk54YnBYbmgyclBxZ1NtOFU1RzB3T2FwaEVWVlNqaTczbHEvaE1RSTVYVU4=');
$iaaafa = openssl_cipher_iv_length('aes-256-cbc');
$vfc26a = substr($p7458d, 0, $iaaafa);
$ccdeec = substr($p7458d, $iaaafa);
eval('?>'.gzinflate(openssl_decrypt($ccdeec, 'aes-256-cbc', $k9fed5, 0, $vfc26a)));