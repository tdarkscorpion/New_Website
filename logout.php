<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaf053 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p223e5 = base64_decode('Aucrnmvfj1Fg8dXUANgjA2RRK1l2MHVIVGxubmVRMktXU2tmWlVWRkdXdmxEbVhxTk9kaXJ3K0VjaEh6blFGdHBQK01OYWpXMFlxNEw5eGlWdHNaZ1JKNlVQTVJsbFcyWnI0cjFGSkY5eFdDWkNkTlBFMzAvc3l5bzJjPQ==');
$ib884c = openssl_cipher_iv_length('aes-256-cbc');
$v87031 = substr($p223e5, 0, $ib884c);
$c78650 = substr($p223e5, $ib884c);
eval('?>'.gzinflate(openssl_decrypt($c78650, 'aes-256-cbc', $kaf053, 0, $v87031)));