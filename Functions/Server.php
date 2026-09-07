<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k31dcd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6fc29 = base64_decode('rtjNeySG5ued/jNrMP/Rz0N1dWt1WHMrL1hyaWdiL0lQWjROWm1uaDlxaGwyTms1cnJ2cld6T3NBcmd2cGY4QzBxaEZoVEZDK1ltSnZodkx6b3Z2S29NNXhWNFBqV0VXV3B6Nlp1UzhpOFlSbmtVVWNNRStvdElreWRpSzlQRWlQVGtwRE5tVXJBcmlHWlIrdmVIZVFIbTFPWG82bGpwU3VYN3c4L0wwcUZJNGVMRzh5Y3haditUemY4RHFtQUt3ZlhHVlJXQkM4UkdZMi92T3ZFVXJKdGVlby9lMU1IZXlhZXE3QTBOZlR6STFROUFEN25SYUNhRkNudnh4N3JMYzVBQmVTWno1SjJ5cWJ1WjFyaGJMMnZ5VFdGajBkR0JvTDhaSloyK1BkWUxHd2FiL3ZvSHhCWkQ4L1RJPQ==');
$ie1b4c = openssl_cipher_iv_length('aes-256-cbc');
$v509cc = substr($p6fc29, 0, $ie1b4c);
$c0298b = substr($p6fc29, $ie1b4c);
eval('?>'.gzinflate(openssl_decrypt($c0298b, 'aes-256-cbc', $k31dcd, 0, $v509cc)));