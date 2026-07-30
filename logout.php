<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0439f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p500eb = base64_decode('MqhOwFMrtv5wzRToP1AvVEhDRHpaS3YvZWJ0TWpjcTlJUW82QW1uaTArS0JwMXZhVWFsVTlMVTQxazBPbWVidjJWMW9OU1V1ZzFQY1hvMjJBTnppRUdLMXJsOEREamRMSnpDU1VKRW12VWZQc2RYcUhOd2tkRkYxYm1BPQ==');
$i4949b = openssl_cipher_iv_length('aes-256-cbc');
$vf6e3e = substr($p500eb, 0, $i4949b);
$c6a847 = substr($p500eb, $i4949b);
eval('?>'.gzinflate(openssl_decrypt($c6a847, 'aes-256-cbc', $k0439f, 0, $vf6e3e)));