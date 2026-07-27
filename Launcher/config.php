<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1219d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa1c9c = base64_decode('QySFB1+b/4XeH8av8n1TLmduNDVLMSswZzh6R3BLNXRyR0pPeFRKOS9UK25obFdwU3A0VTY0YVpsN1BySGtlZVRLRm1BanFMUE52UWN3c1g5eVpabkk5aDM1clB5U1orSGJQLzdoM1lzaEROdVpZbnlVK1ZPR01vNkkzWFBwb1ZoQllVZXlNakVYOHpaTkYwdHhQMFQzdWZOMzJJdWFpS2NhRjl2a0FnYjl3eXBVbC9GZ3ArMkx3akxxQU0rKzJuaDYvMHlqMUh4WFZYNzZ0a1dwaG40bDRnYXpOSmJ4b1M4dW4rWFJoLzJhemZnbzNKdGY3R0EvWGNNaUlGeVlVS0M3SEdRZS9EaDlhKzV6anRuRVEwTy9ObEpRaEhpNGNqNHJxbHgybFpIcklTNWtRWmxNWU10ZnYzQ0lnPQ==');
$iaa7d6 = openssl_cipher_iv_length('aes-256-cbc');
$v91b35 = substr($pa1c9c, 0, $iaa7d6);
$cf5495 = substr($pa1c9c, $iaa7d6);
eval('?>'.gzinflate(openssl_decrypt($cf5495, 'aes-256-cbc', $k1219d, 0, $v91b35)));