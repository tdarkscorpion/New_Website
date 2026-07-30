<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k96819 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p44f4a = base64_decode('bnizp7ZwI5qMxTzfHrmeNDl0YjhJRFd1VEVlRHdnaG96UHdTSG5kbVVJUi9VN25NYnpGd2xGdmFuY2E2a0tUOCtaMzZ6OXJ2anVaaFNjYnV6OTdqZzZCT2hzS0hTTFZXVUtGK293SXh6eldvZEQ4ZGd0bURoRjJPMDlVPQ==');
$ibca7c = openssl_cipher_iv_length('aes-256-cbc');
$v1bee8 = substr($p44f4a, 0, $ibca7c);
$cddfde = substr($p44f4a, $ibca7c);
eval('?>'.gzinflate(openssl_decrypt($cddfde, 'aes-256-cbc', $k96819, 0, $v1bee8)));