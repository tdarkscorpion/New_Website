<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k28a95 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2c3bc = base64_decode('/8cj+E7ZU5RzGKo7uXzjTmNaRU42cHBEbzAwR1BtWVNRU3FCdWk0R3ZVOGNCSjdaYTlsRjlJT0p6UnZsODIrTmhwOVIxUjBBTVJDemx2c3I2WXZjT1Z1d0UxeEhYZUVoZmxpN3Y2Um9iWDNkbGc5dFNuVjltcDZVQ2FiY2t4MDlCRk04N2FlRGgwTVQ0d3lGQ2VsZmdxUWEyMHJ0M3FwOS91VUkwd0t4b3RFbHdYM3BjMU14M0txb0ZHU1pJeSt2Y2lTcTJ0MmlQM1NpQitIbm1XZm45ZlpDeVM1YU5VampkZFZNeVJ1K0o1SGRKWU1WV21BclRBY1Y4Z0xNcCt6MFdXN01Zck9VYlg1aEFRelFiU0FKRlkwMmRZK3NSTTJWbHFEaWx2azB6cWl0MUdKWk9TdVRXRGZoSWRFODdXdm9QczNQaDRpaHNuaDFERkVY');
$i2fee5 = openssl_cipher_iv_length('aes-256-cbc');
$vf7e9b = substr($p2c3bc, 0, $i2fee5);
$c93e87 = substr($p2c3bc, $i2fee5);
eval('?>'.gzinflate(openssl_decrypt($c93e87, 'aes-256-cbc', $k28a95, 0, $vf7e9b)));