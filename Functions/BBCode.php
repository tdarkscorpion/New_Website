<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5eab0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7c21b = base64_decode('bJYzgd+fTc3lOh5SgAMjdUNLaHRmSTBIOEtiTXEzU04zdUdWTTRlOGIrQ2ttUjJKdTVodmhXaGVWT0NaaXNNTjVrR3lYUjYxZDFZZ1RyYzh3ZzFUUHFTa2l4S01sbDcrdzBOOG9EYk1UZEVRMG5JVE5Tb1RCME5ZYnluTXZWWmkzYWJNNjdNQWdtZis2OU9vWHpyRFNNaDM5L3IyT3YzbHd6UENvb2g3SFZKSlg4V0Jrd2pXZmRjNWRoZGY2VFBCa3BweFJLdkhrcC9uTXZqZ2t6REc4VkZpVlBDSGFUckRUV3RHK0I2enZTTWdPVVd4VEM5ZllpRy9YQzdVWnhKOVVBVWhUN2k1L1BzNWZTdlFVVWp4VVYvTU44WDFudkRRQXlPZUUveHY4K2s0Y2NWYVM3c0hRRnNwTE5aNXNhV1lyWFR2QUJIeEZKOWZuK2Nu');
$ic2bfa = openssl_cipher_iv_length('aes-256-cbc');
$v465a7 = substr($p7c21b, 0, $ic2bfa);
$cee113 = substr($p7c21b, $ic2bfa);
eval('?>'.gzinflate(openssl_decrypt($cee113, 'aes-256-cbc', $k5eab0, 0, $v465a7)));