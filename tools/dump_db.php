<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k392b3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9d710 = base64_decode('KFsvuiHBiDveBBxUGeGEb296cUd3R29kZTZrY0VNZ2QzY3orR0krYURvWG13SlI1eWswSGovclZkUG54RHhuQnp5Uk9PN0VoZnBmOHk5OXBYR0pyaXpBL3M0VmpHby9wNUROWVVkYVFxSHZkQlNWMDB1NkhUelM3M3k5ZVUwejJvaWtOMUdJdmhKT0NqNUhuSVM5RDFiSUlabWIvcUIzL3NDQ3FWdVNkYXQxNkJ2a0JRWmloOEZDeTkxZG8wN3d2Z0gzVjNkS0dzMDJhbE5SSDV1UkpMeXdTWWcxdnlnOFR0MjZNNlE9PQ==');
$id4a41 = openssl_cipher_iv_length('aes-256-cbc');
$v2e1b7 = substr($p9d710, 0, $id4a41);
$c11e9e = substr($p9d710, $id4a41);
eval('?>'.gzinflate(openssl_decrypt($c11e9e, 'aes-256-cbc', $k392b3, 0, $v2e1b7)));