<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k893ec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05ae0 = base64_decode('20Jga6UkdRyA1M87hV8sZ2R3dXBubzJFWXZQMktlRXZWbnVybUtuOVkvb0NHd0dQUWNCeitEQjJiY3ovZ1BYb3RlRk5QRTFIaVgvWEh6dlF1KzR1Qk03RDdMNE9CY2lzOHlaTWN1SXh3bVFycUtPQmYyUFd0MGZpWkRIMEw2V1AxMTJqWTFQWlpsem9wOXdRL0VxTDArU0F1ZmNGRmtJd0U3QkNsREtadXVicE1PT0UrWDJJMGxnSmx5VjN6TUpzbWVaQWZyZFFIZVJ4TnJxU3Y1aHBwYmdCQitPSnlubUVidjhiVGNMdGdnTDh5MU5IUER3bjEzMjgxSGhMak83ZUJTaXoyUksxQVVLSEQvMG0rU2VaZGdwQXJOVDN1UmVzN0NHQW9sWW1PaE12Y0VDQ2ppY3Z5OE0yenEzQVBEb0F1UlRjYlNHdjZXUWxReWFqMnd0YUNCVXlaRk5uVkpFK285aE1sRUdmODRSTUVWVm5jb3pFOFpDaWpidz0=');
$i2e2e6 = openssl_cipher_iv_length('aes-256-cbc');
$v4ea3d = substr($p05ae0, 0, $i2e2e6);
$ce37e8 = substr($p05ae0, $i2e2e6);
eval('?>'.gzinflate(openssl_decrypt($ce37e8, 'aes-256-cbc', $k893ec, 0, $v4ea3d)));