<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7dc87 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe366e = base64_decode('AHD6GfCVtLEmY92UQKLMqTE3clh2RVg1QlU1T3EvTDdMdXlPRGRQWWpjRmpqRDV4UE9oLzk3a0tVVW9MWWVoVTMyUDMrM2NTY2NqZXh6bTlRNkd1MlFWeTYzb2FHNDVDTHZGeFRnUFRqWUdVTisxTS91ZGZpZE1EU3IwPQ==');
$i54180 = openssl_cipher_iv_length('aes-256-cbc');
$v8020f = substr($pe366e, 0, $i54180);
$ca7728 = substr($pe366e, $i54180);
eval('?>'.gzinflate(openssl_decrypt($ca7728, 'aes-256-cbc', $k7dc87, 0, $v8020f)));