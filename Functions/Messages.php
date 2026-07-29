<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7d81f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbbf1a = base64_decode('EuodGzmWmk40yrN5P/b27FFYQS9ITVJ2K0U4VHZyU2JrTnIwTDJiZGhkdTg3MGo5Q0Y3V3NGYXNpd1ROYVViUDdZQXJQSytGK1VoemJsN1RPcWQyS1hkeXIvV2EyRzBjdDlIdzBlNW9GZ2VEUHBnNDJyYS9OZGRvVGM1ZXNCWldOUGFCOEFJTVdUa2JJWmtJSUdySlA4S0xSUUs5ellTTUJubzVSSCtrcHV2KzJhbGVtTmNVbHdOajJGMWRmdSsyOWpkOGxJVzJmMHpKSi90eVhHelJZWG9HVW9qd3VSUHo4eUJoR0JRUzMzc05OR0VFMEl2b3REQWRhbTR0Y21JNHdYb0FKaG0vbjJtT3JyUHhCVTlnVDY0MHQwenhtdUZQRVJaWUNZLzFwbTdldWFtdXRLOHhQU1kycVhJPQ==');
$i9e292 = openssl_cipher_iv_length('aes-256-cbc');
$vccb69 = substr($pbbf1a, 0, $i9e292);
$ca7e3a = substr($pbbf1a, $i9e292);
eval('?>'.gzinflate(openssl_decrypt($ca7e3a, 'aes-256-cbc', $k7d81f, 0, $vccb69)));