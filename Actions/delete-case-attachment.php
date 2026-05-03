<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d775 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4c6b6 = base64_decode('6AqewuNijfeYf6kFaTeXJ0RibmtKRUZWYUVLblZWcXBBd2FJSHRSUzFIaWZyZjdOcmJteWF6blA1ZC8rd3dhUWZCdlJsR0FZRGlpOXNuOXNNTkNTYXBXZmVmZEQzU1d0OFo4N2NCZVdqMDdzWFRuaEdLT0cxa3JvRXoyOThqUDAvVDh6UXZjT1dsYUJJeTZzTjJWbC9RcWZxYS9waU5mWTlFc1JVRmNUQWVJMVNMQTB5Vkh5MG52bUl6dTNuUjRBcGRUTjhIWlpMdUpLYVBwV1djNTRGRTRpNE9xM3BKRWhwd2lQT3d6TXNncnUzcG5kQ2xaQ1NmT08va3NOZlZzOVZsY2VLWE5md2tUVFVQSGVQMXhZTnJ1aVdyQjdSTFJOK2w0QmtLeHQ0NlIrMDNWVnJsSmxnMkx3VWxjN0FxZEFuZ1pkb3pkNXJ0dnFqYlhu');
$i60c8d = openssl_cipher_iv_length('aes-256-cbc');
$v2a0d4 = substr($p4c6b6, 0, $i60c8d);
$caf712 = substr($p4c6b6, $i60c8d);
eval('?>'.gzinflate(openssl_decrypt($caf712, 'aes-256-cbc', $k0d775, 0, $v2a0d4)));