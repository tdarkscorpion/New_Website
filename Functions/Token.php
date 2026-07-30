<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kff5cf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p02b81 = base64_decode('1e52k/29gp+qJHMjdcN3a1daZS9WbFdEbUVCMTlPVkJuRmY0YVZ6T21oMnJwOVlreUhpbXI2R09IK2t1TkNwdyt0ZzhGNk85UUxpOFp5SFMyRS9FSG8rUTBzdU5nWVRSNEhqM0UxNVFBczUvMzdPUEU0SGE0QmF3ZWdQc0pOaStlQ3VUYVBsZmlFa1JXS2R3UFNMaWFLZ29SczZLV01ZNnNkUm0yRUJGd0JsYmpZbUI5cEdxM25hRlFrQ0cydFBDNDZraGgxem5nbWRVTFlDb1k2SlZuNTAxOWFaZ2t2K3pBOWVvcVIvbEhTbzcxdkZZRHdjREhFRkYwUFlWZXVQL1FkOVZFSjhNd3hIT2pURDI=');
$i2cd07 = openssl_cipher_iv_length('aes-256-cbc');
$vae592 = substr($p02b81, 0, $i2cd07);
$cf53ed = substr($p02b81, $i2cd07);
eval('?>'.gzinflate(openssl_decrypt($cf53ed, 'aes-256-cbc', $kff5cf, 0, $vae592)));