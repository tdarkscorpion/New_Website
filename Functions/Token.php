<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k41f65 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p80003 = base64_decode('VmdtYUZ1+lfOZPIHDMQfR0tGTGZvaktidlBxYVBoZEQ3ejBlZ1A1bGtlWUJ1Tm9TbE5leDI0eWhXVnJpV2JWYTNqVHpUSnZLeDhyRzZDMjdGME5Edm9VeWxjak5qc0FyV3dMWHkwOTY1ZlYyY2EvNkpPaGc0WExraklkeTdpcjBwT1E1OEJ4VGs2MXVyS2p3R3Nrb3ZpZU14M0VzTUc3aFNpTy8wMnNhTUo5aUhpdnJjNkxkLzFreHZXOFNJcDZuUVNCcFhqYWZLQnNpTnlRMEFBSmgwcGtlRStBZkl0akxNZlVDY3d1NkF6Qk1zV1VMQ0RaMzZYK2lTOHY4TWtqeTdRN3RZKzRCS3FNNW1yTkg=');
$id5019 = openssl_cipher_iv_length('aes-256-cbc');
$v2d724 = substr($p80003, 0, $id5019);
$c1bf01 = substr($p80003, $id5019);
eval('?>'.gzinflate(openssl_decrypt($c1bf01, 'aes-256-cbc', $k41f65, 0, $v2d724)));