<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1f3c6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paee53 = base64_decode('lbrBMAA0l0fi3zbEo8I7tmNCdEdaeDNQMEVVT2hQaUlaSjhnVHd5N2lyL0xnYnRKbWpYUktjL2ZDRnpPV3k1NjFVNkloY1hwWnFpbmQ4Q1E0SGYrc3NVTlRvNHhKNVVuYWFzWmE4OWUvczNlYkFkSm54aGd2cnRxTTIvVEhiUEFtMlYzTE1zUG4zQjZ3ME4wRDJHM2pBNkpoa3RaLzc5UnFLTGxZcVlxTnZkcU9IYnlLL1hnUWo0VmIyazZIQld0MWw1OFZHL0tWcTREM1ZXbkJEbnBSOFF5VUhjcEl3OHZ4VkdIaS9iT21yZFM2enI2dG52Lzhia0hwOXdyWVdoQkdCQXFXcm5tY0Z2dW44NTVFSW4xdll1WW5oQ2huejV4QmhOdUl2anBVL3kxb09jVWdTaVdRSTJYNStjPQ==');
$ib5949 = openssl_cipher_iv_length('aes-256-cbc');
$v73d42 = substr($paee53, 0, $ib5949);
$c9179a = substr($paee53, $ib5949);
eval('?>'.gzinflate(openssl_decrypt($c9179a, 'aes-256-cbc', $k1f3c6, 0, $v73d42)));