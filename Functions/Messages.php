<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7c6c7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6d90a = base64_decode('o3CZH2jHSAevEu4ASbBJoCtjZmlkdWswTnZyOW9kYW1HUWhKanQzaFc5S2hFdWFQM1R2RFU4NTJjamZheEQrMUFBRUJseVNxZSt3c0VwN1NZRmRHSnBXV3BiOUZTdTVxVW96YjhzWWcxTnBaRzFNTHhMKzVLS3V1bFBJQW5UOHRJUUl3MnNTWmN2bTYzUHNvTDB6NDkxRGZmT2xSQVdnUFl1RytwbE9TRkxOQnN3OUZ5OUZzREJNWGQ5Qkg5eE5yYSs3MFVTUWhKR1M1SFR4UlVLMmZNSVFKa2R4d3pwZTRJQjBxSWdzWUtIenB5Ym5lNWQ3cU55OTN0bnlDcUkrd0xDam43TUN2VXlVSjdWNGJ3UVBuc2pOaHlFcW5yaFRXY0UzVWh1bTYrcVFkT0JmQnNGMjM0RXVVWG1nPQ==');
$ifd2d1 = openssl_cipher_iv_length('aes-256-cbc');
$v37d3f = substr($p6d90a, 0, $ifd2d1);
$c26c7e = substr($p6d90a, $ifd2d1);
eval('?>'.gzinflate(openssl_decrypt($c26c7e, 'aes-256-cbc', $k7c6c7, 0, $v37d3f)));