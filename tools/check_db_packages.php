<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8ac91 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdfa6f = base64_decode('Fl1OB6Ip6GGqcHbP15yuBzd4U3ZqVVpEZ1hJTkVQTTVDcFAyK3JBZmJmVXFSbklqdjZBZUxBUDBHSFB6aEttZzdJMllOS2lXMThBWDBwOWVHY3JyQmpXcWtWYVhhMXRoRERVQUlUOGEveXJvbGdwMUZQK01LRmp6Y05BQ1pXWWl2MEVCYnp6MFZQSksrSk9LcFNRYmJ4VWF4dzBsakhndjVPK1hFdjBPaTZvNHgvQTRUZUhYcXFsQmMxOGtvTm9jcXhzM01jOHRBTUVUL0NzVTJYNWlkMXZJc2t4cDE1Y3BxeEFSOHc9PQ==');
$i85f54 = openssl_cipher_iv_length('aes-256-cbc');
$v359b9 = substr($pdfa6f, 0, $i85f54);
$c33c80 = substr($pdfa6f, $i85f54);
eval('?>'.gzinflate(openssl_decrypt($c33c80, 'aes-256-cbc', $k8ac91, 0, $v359b9)));