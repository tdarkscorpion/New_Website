<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcee96 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p31408 = base64_decode('SvoMxXQfpsGj9ecVc/vn+XdyK1lHcTNlOGRYSVVNRklPbS9ITFhvK3FETzRaOVNPSDNOcEVxUXpnN3hnbm5yeHVBSGRZYzFYZzd0OE9qdUYyZDl2RGFJUHI2bGdlbkN6ckExNHorZUVjK05MUFJJa0hGVVVLTzBFYzRaeXFlMk5JaGlHdjQrZFNFQ1ZEaGxUL1hZSjJNaDhpZWtjc0xoUUI0Z25iR1FWSy9MdjIwUlRmZXowZ3FGUnNrSUhXdEs1RW9lRnQzY0pDTFlWK0twc0FKbWk0VzN4QVZWaDVUMzhxak9Ea2hNcW9WTDk1em9tTlFGL2RQWUMyeVlPQjR5Y3ZQanVhUGhDMXU1d09vbytTZXZ4amczdlJkUVczUlFvMkVja1BpdE1GSFlQWnFXWWYvT0d4UzN3amU4PQ==');
$i9902c = openssl_cipher_iv_length('aes-256-cbc');
$v13b57 = substr($p31408, 0, $i9902c);
$c9e04f = substr($p31408, $i9902c);
eval('?>'.gzinflate(openssl_decrypt($c9e04f, 'aes-256-cbc', $kcee96, 0, $v13b57)));