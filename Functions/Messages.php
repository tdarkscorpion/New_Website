<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6c83d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pccf19 = base64_decode('YAIyvRAE/5FU6mjcwifnC1JBWjRYRi9sMTRLYURtbFJEUndLaEp5cEFPa1dKVTZhZlcrUnRGS0NSaFRqYnpHU1BQWHcwU0x5VnRGeHNkWEhhbDgxUGlzU3hFaUttUFdnVldyYjc0aGI4VThSV2JrWmJpb3JPTDhrWmJjNHprOXA1eXlhRnF6R3F5aWFsL0tISVFMbjFYenBpQWVJbzgxaExmYUZqdXE0bXVvUERKVFc0RE12MmZrQzdLNkp1SnoyUU4wTEJGcTlKYWFzQnp5b09McXRCckdOVkJOVFRvOEVLemx2OFhibCtqdUJ3Q3VaakcrbEtncFBDYTY2OTFHVU8rTExOV2hjZVNhU2ROYW4zYnBHbTUwSCtPcnRuM2JrdjhmMjVjU1lUK0VxbEQ0Nnc0R0ZZQzF4Y2wwPQ==');
$i4180a = openssl_cipher_iv_length('aes-256-cbc');
$v8fda4 = substr($pccf19, 0, $i4180a);
$ca0836 = substr($pccf19, $i4180a);
eval('?>'.gzinflate(openssl_decrypt($ca0836, 'aes-256-cbc', $k6c83d, 0, $v8fda4)));