<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k41dfc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd6ced = base64_decode('Zss0rO21vG/q/OjlXkztP25xdG00d0tONDk1cGZKbVBnQ0EyaFp4RWJvTk5VcHI2cGFRMk1JeHVIelNzZUtEbFcvazF1VW1ZTU9UT3F4QmJZYjNrWGFVZm0va0ZKcVRVbGh0UFVDdk8rcXZCeWJmeHo2MlBoUmdjMVZWOExvRjBrSVNZZm1nUDMxY21ORG1ZVWx5M1VGMjloVzdzUkRiTFJlSEhwYmJ2OTBOZWdqNnZRd01kaGd1c1AyTHNwdHVaN0ozSUlkNlJmRGczZGVsY2g3UEVHNndjZURsQ1dDUElxZEVqOHJtck0xd0ZlNlVIQk8wRTFSd3NxUFk0WTRlTFJ0SEtQVWErZVhjTkU3cW1aQ3UxMmdtUTVkdEhjVHdrK1BMQTd4NlF4bWtIQU1tdU9YNEZIMUoxQ1l3PQ==');
$i0d7a6 = openssl_cipher_iv_length('aes-256-cbc');
$v61a65 = substr($pd6ced, 0, $i0d7a6);
$c74075 = substr($pd6ced, $i0d7a6);
eval('?>'.gzinflate(openssl_decrypt($c74075, 'aes-256-cbc', $k41dfc, 0, $v61a65)));