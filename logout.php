<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kea8fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p90767 = base64_decode('UJNVauWngACVFW46WAbWKnAyZmZ5cEk2L2IyQzY1Slp1cUFhWkVsZW1Za0JJWGtGeWg0bUFOMW9ONGVVRUJoUXF1NGM3ZmpMY29sVzRzVWJPL203YVRGTWdlL1Y2OEs4eXhzVFVhZ2U1cVBaUHNYNUZjOXhlWDA3alVFPQ==');
$i8b25b = openssl_cipher_iv_length('aes-256-cbc');
$vc3a67 = substr($p90767, 0, $i8b25b);
$c54f08 = substr($p90767, $i8b25b);
eval('?>'.gzinflate(openssl_decrypt($c54f08, 'aes-256-cbc', $kea8fc, 0, $vc3a67)));