<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7dca4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p635d8 = base64_decode('biClzjI2FOJaprWx9VqFUFdVUWpNKzV4ZTJlWmNSeTNPdkl0aG5FS0xHK3pUSURyU3YxM1BtRWdNQitNZEJqRkFLUjRlb0UwY09KdWEvcmlFL1B4OWJ0QkhlZTBNV0ZBbzVCNXZwak1UYm5zbVdtbGhjbHdLZzlCTmE3Y1RoWjJ2SldwbGtOQ1hJRFgySzZiL3EyaGFRMXd1NDBCTm92c0w1bERiMzRoTTY5dG9jNTNzamF1UkhQZUw0SnBvVCtUVzJJUHRCQWlLcUd6a2RXYmtFZjZkL0hJdUl6dnhMWFJQZzBLblNIZ28rUVlzSmNyYTJaYmZOeVRIZ3ArYWVkV0wzdDd3R2hjRjdDQU5QM2tQeERKQkF6YnFTOWsxNDRVVXhiamxIZ0tzckIzb1BEKzc2dTExdW9Nd0hlZHRPb01WVVJ3ak9PY3duOXJMejVG');
$i708d4 = openssl_cipher_iv_length('aes-256-cbc');
$v8912b = substr($p635d8, 0, $i708d4);
$c9c874 = substr($p635d8, $i708d4);
eval('?>'.gzinflate(openssl_decrypt($c9c874, 'aes-256-cbc', $k7dca4, 0, $v8912b)));