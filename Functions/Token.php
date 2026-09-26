<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82e82 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2d311 = base64_decode('66KaCQhaUlRlu19ebXtmGnVyQWxyZndweWREM0ZGaFFpRmFsYlRXMkRTU01pMWhLZFVObytBWGZiSGpHWEVTKytIRC9tSXFPeFB0ekQrLzVyQ1JKVUZDclJGenhFZ3preWtFZkk0Vm8vTDNQNWZTeHpaQ01GWkROaExTMkoyelR6V3hCNm1mY0orTnd0Z0hUeFU1bGhxWXNnWVNKNTZIWjdoZStWMWJjaHFyWXN5eEVpMWsxOGQwUFNaVVkrNDh6eVh3Q00xaDEyNjAvRnAzYXBuNFhhbE9rc0kvUmhlSnd1TDRqejZORnJza3VrN3Z1WkFqaVJpQURLWWtVV0thMmFPeTRkUzFJditJV0hHQkV3cDlEdThZa0dlOWRaQ1NIbzJiYUppZFpZbmFYZFJWNDlkNDZ4NnFTUUI1T25LWDB3aW5KS1E1MW0yNURsa0hkS0kvY0hlOUkxeld6cDFheVVDMVJYcHk5Qk9uZk91anBoMEh6K25qbVJwZz0=');
$i864e6 = openssl_cipher_iv_length('aes-256-cbc');
$v91b43 = substr($p2d311, 0, $i864e6);
$c4309d = substr($p2d311, $i864e6);
eval('?>'.gzinflate(openssl_decrypt($c4309d, 'aes-256-cbc', $k82e82, 0, $v91b43)));