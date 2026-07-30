<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc34b1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2c07a = base64_decode('rQUV5SFhfGM9oz91X+rMT3BubGpLZnJKSE41ZnNBZ0pzQ1BFRlpqWU1wcFVwaG50K2krQkU1K1gralIwdnN3OUJKZHh2UmhDdkw1ZFJGb0pxYythTEVKUEk5RTUvT0RGeXNUUDg4bmM1a2xsQW9DSmNubHRzWlBVSTN2bjdxc3NQUGlQVHNSWXhkcityeWZ4Y2pFMlFDU0czWW1Qd3FTQnZxTWlWaFEyUDYvMTlxTXlLVUFzYUZCNTFQMjdadVhIU1crNHFwQm5iSTF0ZndBQTF2bSt2SGtPdXkzcXZlYVF2RCtFZ2lzT2tqSXFGemdhNk9PYS9RbTF6SEJmeCtrRDhhRElDVi9IOWsrcmtQUmR5SjBXYlRTZWtEU2V1QTVkSFk3dFFuS2NzbVhZdGk2aGpIZDVpdE1OS0FBPQ==');
$i5ee74 = openssl_cipher_iv_length('aes-256-cbc');
$v35364 = substr($p2c07a, 0, $i5ee74);
$c7b810 = substr($p2c07a, $i5ee74);
eval('?>'.gzinflate(openssl_decrypt($c7b810, 'aes-256-cbc', $kc34b1, 0, $v35364)));