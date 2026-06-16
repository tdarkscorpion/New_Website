<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kde512 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p701f7 = base64_decode('prnBup40WZKNRtyWA2NtqlJaUzR6LzlNWTcwUXBibFVnM29ocE9RaWQ3Q09ERDZ0OXFRNEswbGZPV3RuQVRsYmlZRmJIM2MvenVEc013dWtEZWs5UUh2djB1b2JxaGg4bGpzemYzN1RiZ2tlaWtaSVlsOUZ0NEs5THkrb2RMTVdpRGFFWkc2RUZqZlprQVQvb0VQdVFjZDA5ZUFmL3FFNWJBa0RQeFBuN1BpdEdHdTRyZGhQb3BWN2lUdEc4SlY4L0c4Q3V4MTRXNDgwWW0zNw==');
$i6ea17 = openssl_cipher_iv_length('aes-256-cbc');
$v6e491 = substr($p701f7, 0, $i6ea17);
$c1d119 = substr($p701f7, $i6ea17);
eval('?>'.gzinflate(openssl_decrypt($c1d119, 'aes-256-cbc', $kde512, 0, $v6e491)));