<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k572e6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb4b7c = base64_decode('c8c638SyF3f+Q2xT64i+EDd4SnBoNm9ROFo0VUJaN2pMZTlxVlpyQVU0UUhyTVczNmUxQzlHMThIdjFlNGxXWTgxenZoY0JNKzltUHJlYUFTOGZZYjVib2wrZTRWQ3o3aHVtd05CRklaTnBIbXduL1cyTVhzbUw1MFFKZmlkaEJEcnJXMlVBam02RTNNRXh3bkx3Q292VzF0eXlLYW9Fd1NwZFFtdmxnUWszaE5DNzNsZlBSZ2JzSUFIMmwyejhzMzA2VEgrbDQwNEI3MHJUY2xuUHcwdG4zUU0vemxwVGEvY2RZUmxpc2F6S1dWdHBMOEEvSHU3aWxoZy9RMG1oRHcrc2lobkcrOVVjaVRXM0pDbldwRDRmbkVxeUg0bVhvY0czOEE0K0lWc0dBb0VXelRwZGxCMEo1dWV4ZkprQjQzaGlsY3lXeUtPM21yZXh2V0lDNjEyYlFwejhXWTdqVWpER0FFQT09');
$i7f87e = openssl_cipher_iv_length('aes-256-cbc');
$vcb296 = substr($pb4b7c, 0, $i7f87e);
$c088cb = substr($pb4b7c, $i7f87e);
eval('?>'.gzinflate(openssl_decrypt($c088cb, 'aes-256-cbc', $k572e6, 0, $vcb296)));