<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k83c21 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f5fc = base64_decode('3HI7RV7X3Y7ifbmchY3zezR4QXhIZWRHZGs0ODl4NHpwSXQ0andWNTBabEJsRitRNHpiWHdINjZOVDBYcHVLdmMva1QzNjNhczVHYXducy8zZjJidnZKdmhmQktrdVpYY2kxWXV1RnhxRnRjZWtxYzJvaG1UUmlvbXhYTmZhQmh6dlA0aTZqMlRuWDlwS0NZMW1zUWphcngxNnVPbysyU05IZGNOWjE1dW5XZ1E1QVN2STJxbStpaStMTjlHYVdySThmQmVNcE9PTmp5SloxY09ETktDTExON01sOHJ1RnBjeXhCUWJYU2NoR09ISThjdVdEOFZ0NXFQa0pjSHY0QkNJU1ByTHBzYmZ5ZkJPUDg3R01ld0c1U2doampYUXVkMDZKOXQrUDhUbDFZcC9hdmkvbUxtSUFLSVhNPQ==');
$i56edd = openssl_cipher_iv_length('aes-256-cbc');
$v7459a = substr($p8f5fc, 0, $i56edd);
$cf15f1 = substr($p8f5fc, $i56edd);
eval('?>'.gzinflate(openssl_decrypt($cf15f1, 'aes-256-cbc', $k83c21, 0, $v7459a)));