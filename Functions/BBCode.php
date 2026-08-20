<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcbff6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbc213 = base64_decode('Cm3v1uN7HvJ3FPtkxRNBIkJQaStnb2dyWC9lMXR5RjdGUU4xdStoUE13SVhVUzFZZzBER0M3RFZ1NGhqbjdpRFo5QnorcnhwYm1vRjdid0g5enpQWXFFeWtYOUxTbGFXcDhTUHlNSjA4a3dkTmNkQ1RDV1I5ZVhhR2dkQWY0U1VSVWZYNmNCNGRneW4wTE1PVUdHSzV6WXRCaUJmV1BVMXdzY3FhaWZjNm1tNHZWV3JDcTBJZXZBUWJndjZsdDhscEJiTlcrakFkNGxldlN3T1NXUWRlcUZHWlU4aGVUUVVZbUFRZFpxMWVCNE9KQkMvd1lnR1dRNXlYZDZkaVpJQ1Q3eENnT1ZVWWpydllDN1ROSlc4ME5OeDB1R0F5OHdPcmk1aWJRZ3N5WUFpSzRiN3NtQ21jVFNHMkJScW1Hd1M3MERTWXMxSCtIYS9LRHk1');
$id803c = openssl_cipher_iv_length('aes-256-cbc');
$va9671 = substr($pbc213, 0, $id803c);
$cb231c = substr($pbc213, $id803c);
eval('?>'.gzinflate(openssl_decrypt($cb231c, 'aes-256-cbc', $kcbff6, 0, $va9671)));