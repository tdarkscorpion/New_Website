<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4dd70 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p56d89 = base64_decode('6BbJUbqhfUv5Fw3Nu9ULpEw2NE5CL2IyK1JDSFhuZTVhSjlRU0swNW5IQldmREFuZ0ZqT1k3WS9KOEd0azV5RmxqRUIrUmhjK3FmZFBzalgvenpHb3lXNlFhYzNXMDY4NDE5RnUrQXRhQ0pFMVB1c2U5dGFmc01pTVE2VENRc1pwYThkUW1qK3VqVzMyOVJaK1R3a08rZG92dUJQdEVHbXlkU2syUmNhWVdnekgvY1J4bDFuTkNKY0xETFBNYVZTT01BdlRLL3Y5UW9SSzV2ZHQwdVVrK2VNNzlURlRlMWl3bEptMkgzUTg5c0I0UHhmd1VTRFhIaC9oMkxvaFROc1NlbVU1N0gzdmxSVVBrLzc1RnRKakJvWGtVbkdyMnNGNDZhbkdTRFdPS1FjOTdSV2VESjQzeUFkb0xVPQ==');
$i41b9e = openssl_cipher_iv_length('aes-256-cbc');
$v4c204 = substr($p56d89, 0, $i41b9e);
$c42dbd = substr($p56d89, $i41b9e);
eval('?>'.gzinflate(openssl_decrypt($c42dbd, 'aes-256-cbc', $k4dd70, 0, $v4c204)));