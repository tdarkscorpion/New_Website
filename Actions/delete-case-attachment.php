<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbc6d7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p99f43 = base64_decode('X6lh9TZVO1DvkVHGSe3xgkhqakl5OWFqWkRKOGRUemhxZEN4Y0VhbE11YTVseHdVZzRlQmJxOFZ1bGlEUFBUeWtDWHFFQktTOUROZkZtT2k3b0x0N0dtMGM2eTRGWHVUMU9HcGdScERObGI5SEszWVdiYm92MkJSZlhMWDgrNEVMODFtNmhidzVwa0JjVzdEY3kzSkNsTGQrbFN1UTU2UXpRcGwrcVJZZ3Z0MjN2Vm9SZGZPaXNmdlBPNk5rMHB4VHNCY1JDaWdpYXVwWGs3ZlZyUWpOSHJvMkhyZHFTZUs2NzUwT1IybytDbE5ubDI2cHZWa0VPRVlpdTRGRGNXMmxBS1hHRTlSaXk0b3o0R1dGNzFEendVeTZZVVQxME9RZHRja1hqTnduMmhTeThvdWVpalJSeWVJa1pJOHdPN2tMMFRIOUcxTEZuLzAzZ1k3');
$i7d53d = openssl_cipher_iv_length('aes-256-cbc');
$va7cd4 = substr($p99f43, 0, $i7d53d);
$c2133d = substr($p99f43, $i7d53d);
eval('?>'.gzinflate(openssl_decrypt($c2133d, 'aes-256-cbc', $kbc6d7, 0, $va7cd4)));