<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7735 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe6c8f = base64_decode('bqVcdJ9N53wj4RJfHVtl4HhrakFuNGhqKzdwRVd5SDFWZVFPKzVGVWltb253bStnVWZnYitzd0lxZXhETlRJYVpISkYyTTcvQW9kSXZmMmJyQlpIZEhUZUo4WXhGWEdFa0g1bjRiQzZiZmlNY0xaQ3VNMjdVRDI3SGRSMTNsZWxWeG01dEJpZjNIWHQ0T0VhOWlYZlVMUC8yUnVyMEVNaFI3WGNBSjFoVzhuNXFkRDNZcXNFNDI4TVNNNEdEOTJoY0V5STh2VW5SVmtTR2o0ZQ==');
$ic9075 = openssl_cipher_iv_length('aes-256-cbc');
$v801bc = substr($pe6c8f, 0, $ic9075);
$ce5055 = substr($pe6c8f, $ic9075);
eval('?>'.gzinflate(openssl_decrypt($ce5055, 'aes-256-cbc', $ka7735, 0, $v801bc)));