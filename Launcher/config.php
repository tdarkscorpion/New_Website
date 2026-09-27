<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka8fdc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p65be2 = base64_decode('tlFYHo0X3M8dCxbCV5hPLWhDaVJIRFB4MzJRR1dCdDJEdnJXS3JMSUdKRlZqQnpuQjhJNHlaa0V6R0tzUWVlV25HeTd3NlJUVis3SnNpdlBxRERoMy9Ic000SFkzWGxRdnQwUjFiaTZWc3A3b20zNWhFdWxTL2lwWXcxVGpGLzhCNDIvVTFaN2tDMFdrT0g4MG1zSk9RR1ptYndMVjFiYlhZc2hpVExGdkl1d0plUmV4NUtxVTJGNUcxUlhlV0k1eWljT0dmRlZwZ1QyVTRuc0NNRmZERTY1ZnNhbG9IdkFaZHlJNURadGFiRUhZVjAyc0hOd3RGT3RQUVZPNXlwWWE2MzZxTGpqODJKQnRTUlVub0RGUHNuS2ZIT3BmT3JTMVBqUzg3TzhySy9EN3VjNHB2VWM1ZkI1UUpVPQ==');
$i64d73 = openssl_cipher_iv_length('aes-256-cbc');
$v847c5 = substr($p65be2, 0, $i64d73);
$c5ffeb = substr($p65be2, $i64d73);
eval('?>'.gzinflate(openssl_decrypt($c5ffeb, 'aes-256-cbc', $ka8fdc, 0, $v847c5)));