<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k87abf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b094 = base64_decode('sBd0UUpc7XmEYHIok1LTEWhDazFEMGpaS1ZHOGpENm0vOTB2Yzd3YWUyMkdLbHU0aTVkZ1NaVUhpeFdVQ0prcmlDbDdIVEZ0YjFFa2FsQWVzQ0FBM3RBRUF0WEs1aHMxVnhFVGxhZThsQTg1NlMvOHdBTTFDT0lOY3l3aGwweHk5cC9WbUN0c0tKemNpbTUyRGFxRW1vQmVWRnowd21FZ3VKeTk0TDVqTUZOWlh3SFVyaS9UamxjOGJSTU5Tbnd2WnpjZWpPS0ZRY044NFBJUFlTVFQxdFpzL0U4VnRsMEpYdXhINlZpWXlXalNoS0FkMkxIbWZBbzBSSlJpVEpUTE54WTlpWVpueVA1enFSckZoZWZWVDNPN2tZaGFvcXVJUWNUTVpIM0RhOUpRZm55cUVpOEZ3QXRpeEZNPQ==');
$i6d517 = openssl_cipher_iv_length('aes-256-cbc');
$v1a95e = substr($p8b094, 0, $i6d517);
$c73b1a = substr($p8b094, $i6d517);
eval('?>'.gzinflate(openssl_decrypt($c73b1a, 'aes-256-cbc', $k87abf, 0, $v1a95e)));