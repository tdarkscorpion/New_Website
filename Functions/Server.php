<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k97ef5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p12f78 = base64_decode('HfGxnMv+4vv0E9ahe2nWl3p1emIwL1ZPd1FJd1lWK3FoNFlSZHpMcVZSU2lFVGhpb2ozY2JVUkJ1K2hwZkFweEpDN0hUdDM4d2g3NE42NWVIVlBSOGN6cFRNemFTM2hYdlhBZXVhZHZjQ1Fvd3BRS1phN2I2VDhjWUpLSFpLNnpVTXFhU3VxY1RvYkQ0eEZKeGRYZjVNaTNmMzhjZWQ2YjBGcElhRG1kT0hCWUJMSlk1UUdqR2JEdlFMQWRoWGdia3lBRkppc0RkOTExSjZlVjUzM1hZQzFYN0sxWEdSR0I5WUR2bHEyejBZMWoyMFJRV0VSMHhUNTUwcG1IZ3R1N3FhbTJ2eGo5VVBMeWYvZ052YkEzM1VKem9oSFBwbjRnZjVJQjhkcE11YTJwOHV0L0VXNlFkRlJKdS9RPQ==');
$i32a9d = openssl_cipher_iv_length('aes-256-cbc');
$v8813f = substr($p12f78, 0, $i32a9d);
$cf5018 = substr($p12f78, $i32a9d);
eval('?>'.gzinflate(openssl_decrypt($cf5018, 'aes-256-cbc', $k97ef5, 0, $v8813f)));