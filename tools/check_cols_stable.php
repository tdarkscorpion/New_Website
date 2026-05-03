<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7afcc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0cff5 = base64_decode('A23EMlQ+aAbht7QAgBfkf0dJSTVpTk40Z3d6VzJ6ckZwQVFvaTV5MHkzVlgzN2NTMEdtaTRscTlmdnFURnB3aUVvU0tVa1k0OWoweTZLcG51S0FzcmpsR2pRNm51aWV1OVl5R25tNlFMWmlwY3VOSmNVdXZKeUs3STR3cmxHQkVuVERGcnhVU0pJM2VtMkI4NWpXNGJVVVJCOWhMRE5Ndm9SaWt3dGRxMy9jTG1FbXE2V3A4b09PNi9qN3VHbUx3eWloRFJ4NHI1SHFLVmZWYzFnQmNHODU1Z0lQbG9zNVVDMzE3SEkvZGlKRitlOHg2NE5zbytmTDFwL2dKQWRYT3lUak9Oem5heVpDcFZCNVhrWjhGN05aNCs4VzBSblcxaXIxK1hRPT0=');
$ib8c52 = openssl_cipher_iv_length('aes-256-cbc');
$v833e5 = substr($p0cff5, 0, $ib8c52);
$caa1fe = substr($p0cff5, $ib8c52);
eval('?>'.gzinflate(openssl_decrypt($caa1fe, 'aes-256-cbc', $k7afcc, 0, $v833e5)));