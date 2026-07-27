<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k656f3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paa6de = base64_decode('OEphCRzPSuLUSXxgolEINS8rVmFUc0dyR2QvYUlrZWhZaTVLdDhhOXlOdTNEN01kY0FaZTJXTG9FdGgwRXBlbUNWT2xMZUVYbytFbExyckVKc25nZ3FhQkpWTnhLSS82QVZ3UHc4cHdGSFVpbmw5WTJ6Y1pKQ2JTK1R0eTRXUTA0QmxqT2xuMUNxK3ZFdkhzcStUUXR3bDBtQ2dON21QMStFRUdGWVFFYzU4SVYva1E5MFFmOHNaWGFmcjlBeXRFd3BodnlsSFNJYmplV2orRWxMT1ZoYUxHRUJOdjNsLzZtRUQvSXJJOVNYY0lGcm9PYVhIdDJxMDNMZmlGYktCMWlGODdDSHRjcERFVkQ5amg=');
$ib5f89 = openssl_cipher_iv_length('aes-256-cbc');
$v735dc = substr($paa6de, 0, $ib5f89);
$c2ec98 = substr($paa6de, $ib5f89);
eval('?>'.gzinflate(openssl_decrypt($c2ec98, 'aes-256-cbc', $k656f3, 0, $v735dc)));