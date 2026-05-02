<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka80f9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2828e = base64_decode('0S2u9vwkvAbGySi4bXjOgStVM0ZOZGVvNU1OVDVLaXBneFordCtzSXUraktncnhzS3lxbit6NVl5Y1NrWkFPV2FxL2ttV0w1VWRRV3p6VFZibXlTV0VVVDVqMVZmenBZNkI3aGYyVjBDSk0yRlMrVHo4bE5jQmM4NDVxWWtXb3BBVDJLWm1nMGdHUFUxOWg0WVhjZUpzVFh5K2FLZUg3eTFaMm1JWXBjc3BKZ2hhcmtrZ3ZaVTNKbmJWSGZRWlA0dE9zUm5STkJJdzB3U1RjcldxcHZPQXJBYXR5RFBYQTdhU1U3OHdQbWIvdkIvT3d1UjhuT2RBZGUraHpmaFNUemFzYnpWWDExVGM5czkzdFJYYVBlb1NjWWx0RFBPZzRFZjJNYjVRWlFmOXhRUjZVNkovVjR6RDJ5cVhFUTBJUEFWbjlVVGk1ZmVDR3ZGaUZK');
$i97b51 = openssl_cipher_iv_length('aes-256-cbc');
$v168ec = substr($p2828e, 0, $i97b51);
$c3ca30 = substr($p2828e, $i97b51);
eval('?>'.gzinflate(openssl_decrypt($c3ca30, 'aes-256-cbc', $ka80f9, 0, $v168ec)));