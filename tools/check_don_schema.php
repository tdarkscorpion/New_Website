<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k01449 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbdde4 = base64_decode('6CUhhow+AOmXB4W0MupnvEdMOHpBdThLb1YrRUh2Mko5NzZBWkZmTHkxUGpvVXQvWmlZVlVTY09IbnhINFRxd29iMmRkUkZZUFNlZFVHdU42RFAzL2MrMFlwOGVuOWJwUUNwS2dBbjBGeHIyY0pRdFE5NXFBQlQyQVlZUnpYT0tYSjdCUlB6bU9KajlwaDBNdXJaNGVCMlIrU2ovblpCRy9aMHpaZVVCN1pNeWdCTHZScWFSUEZ0WkM2Z0lub1NsdVhKQ1N0aHN3SE11eDBNWVZuY3ZUVitVZnNGb2U3YWQwSTdyRnRJRzNzVlZDaDgwa0dDeFRoVUJSUjA9');
$iac8b7 = openssl_cipher_iv_length('aes-256-cbc');
$v30a11 = substr($pbdde4, 0, $iac8b7);
$cef6a8 = substr($pbdde4, $iac8b7);
eval('?>'.gzinflate(openssl_decrypt($cef6a8, 'aes-256-cbc', $k01449, 0, $v30a11)));