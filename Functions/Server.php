<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd3471 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p21e49 = base64_decode('6X4cIXVDHyp0Y0XmO/Ft9WkxdUczUkhVU1FRVjYzVkNNVFFLSytSTU5hb2R1RnBJd29CYjRoMzV6K25seUZTYTdPTFhhc0ZuWEhBUXd1aGZ5cWxGRUNkcDN0LzdjTisxSlpZeXlnZWtKdjFtL3ZibDIrWHcwbDBPNjN2R1A4SlhzUmNqZ0tibHJPR3RlaEFIT3VpZDR2NHVqT1J5aXFiSXl6Q2RZeGxTMHdlZWp0SllOc3gzN2R4MnJkd0ROdE9xTWdTeVhqT0ducHkyT1U4QWk2Mk9GNk1iMUZmQjJRT01jTjNTMXBxTnNNU1ZJdDV0czRhUElGYkFyaENzdVp6OHZiSzgwQlNHMTJTeUhoUDl3MlRZa0lmZG5xU2llUGVpY1hXQ0wyaVMxYVVtMW9sbUlZditYM0poNkJvPQ==');
$i18724 = openssl_cipher_iv_length('aes-256-cbc');
$vcfb85 = substr($p21e49, 0, $i18724);
$cfc160 = substr($p21e49, $i18724);
eval('?>'.gzinflate(openssl_decrypt($cfc160, 'aes-256-cbc', $kd3471, 0, $vcfb85)));