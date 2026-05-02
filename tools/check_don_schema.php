<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcc39c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7421a = base64_decode('4zATr9E63YTWUT0QOhaBLW5CTWZYVGNBWkFhZFlaQXhlQ0lIWVpmWjJibkVRRHFKMk9FNkJjWG5NakZJK0lXaC9JRS9sZHBweCtEV0ZKYU5nVFRmdEt5Y0JWVndkMWs0YjdObFh3WXJCZXkzOUxuUUdYc2luMENNQ3dtbkNhU1A3cWdEc0xDQWdtUDFMYkp2RHc2NWdrbSt2UUdydmVCOVU3Mk1UbXVnY3Znamt3NDBBU3JnVFNGK2RhaVNWQkdWNkYrbDRsZFlCay81clV6RURLSW0zQ1JFUTZkSWQ3WjlLK1gxVHNFb2RPTlpobGNBVUN1NlBtWEdIejA9');
$i5336e = openssl_cipher_iv_length('aes-256-cbc');
$vd9d5d = substr($p7421a, 0, $i5336e);
$cf2ee1 = substr($p7421a, $i5336e);
eval('?>'.gzinflate(openssl_decrypt($cf2ee1, 'aes-256-cbc', $kcc39c, 0, $vd9d5d)));