<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb2f89 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1a0b7 = base64_decode('4NcDLL1nIg2TE+zgjq6g2DRJR1dkYXkvaEN0RVArelQyVExZc1dLODkrZHkxSWRDQ2xHWFZmZjBueDBJcGRFQ0lDWlVtWlQ0blVwRjlocnYvcWYxUFEvOEJCQTkrcjA3VFZhTzBETW5qNENySi9UcU5NZjExVnpTTWZWeUs0UDAzQ05NbHB2eUJJK3UyT3BsSTdMbWwxa3RjeTFRV2JkTHhBbk9PYmN1dXFIYytSdWpGSUxueEthQVkzKzlQRkFrRTAxcWFhcHJHYmwzMVBoV1pMU1RWa2o1VUJ2Snl0NlErVWVVTWc9PQ==');
$i1f3ce = openssl_cipher_iv_length('aes-256-cbc');
$ve578f = substr($p1a0b7, 0, $i1f3ce);
$cfb7ef = substr($p1a0b7, $i1f3ce);
eval('?>'.gzinflate(openssl_decrypt($cfb7ef, 'aes-256-cbc', $kb2f89, 0, $ve578f)));