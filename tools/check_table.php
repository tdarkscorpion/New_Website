<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k233d1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5c83a = base64_decode('XqjM6xMbTWZoacLI9ShXiDBENkwxNHVDNTZ1L2ZhV0ZoQUVXSEdLOUZHOENselVKeFpSYmtWdkVUQmswa1NBQ3J2RUpCeDRmMmZDTHR3SjgvVHpmRHFyYmpUdVBpZjhoY0JxWHk4SVJuVjN6QU9OeUZUMjRyeGxUQ3hJOTVISVBBOGJOWW9TRnJmTmNUQ2pxdVpoT0x2Ny9lVkF2dlNyMDdsNHI0bzNxMHlWZXYwNmFsd05kOUN5REViWmpyQkgzSVZsK2RGcG42Umk1c3hPQnlmTmQwUTJFOS8yeml1enRza29SQUM5cVE0N2xrRmlaY3BiTHdXUFVhZmlqR0xuT0toQjRYYnpCc3IxaGwyNkJ5Wk5vNW4rOWtvYlZmLy9PVk1rNE1EeXNZUUdYTEd6TmNadlc1SnNmd0ZWSUd1VHBucURTcTIwNWlKSG00T2lq');
$i065b0 = openssl_cipher_iv_length('aes-256-cbc');
$v2031f = substr($p5c83a, 0, $i065b0);
$c72f0d = substr($p5c83a, $i065b0);
eval('?>'.gzinflate(openssl_decrypt($c72f0d, 'aes-256-cbc', $k233d1, 0, $v2031f)));