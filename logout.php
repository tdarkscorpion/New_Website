<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k421e9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe0e26 = base64_decode('Uivz9KQhn9CdXIHo2iL00URQOVFaS1FpUFBtYjZVNlVTbTh3SW9vQkxtQ1VOczNUTllIcm1IODhMYkRud3kvNjhNWWJZYUt3d3Q2SjBSYzdXbkxZR2VCcWtpNnRnamxONzZoUXBDTWs5a0dURTJ5UjVLQXNKa3gxbjJvPQ==');
$i77cb7 = openssl_cipher_iv_length('aes-256-cbc');
$v87ecb = substr($pe0e26, 0, $i77cb7);
$c23bfa = substr($pe0e26, $i77cb7);
eval('?>'.gzinflate(openssl_decrypt($c23bfa, 'aes-256-cbc', $k421e9, 0, $v87ecb)));