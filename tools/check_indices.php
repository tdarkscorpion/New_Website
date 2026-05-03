<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k819d3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3062c = base64_decode('X1mm5o+vE2v+JOpS6QCA11k3UDcxVVVYbDNLZWtCRkNZeVBlMjJ2YzZHS0dNMnJ0SHpGd2JUYVlWcDA4UXozUXVPZXZZb3lUeFB3VGlHRlBEcmhkdE8yZk5PNGsxVlo4eEtnVk1hbFY5a0tIdkpZYmNBa0plbjUrSTZrSE9oZllIM3U2emtQWG1PZitQcC9mRnZGSTZLdDNiaHl4Y3lRTE9vY1pDaHl6VlhseDAzYUZCTkdUeTZ0bktjQkJ4R2VVRjFHQThHWVM1N0YxT0JsUzZMekw0S0VObm1hcndxdXlDOTRDRGZNZFN2TzF0ckhSbXJjSUNlSjl0YW1wekdWR0lLMUlhOFN5LzdjWkt5ZUE=');
$i29245 = openssl_cipher_iv_length('aes-256-cbc');
$v9a5aa = substr($p3062c, 0, $i29245);
$c0dd5a = substr($p3062c, $i29245);
eval('?>'.gzinflate(openssl_decrypt($c0dd5a, 'aes-256-cbc', $k819d3, 0, $v9a5aa)));