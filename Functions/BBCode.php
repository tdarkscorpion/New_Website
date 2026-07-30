<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4cf38 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd8342 = base64_decode('4uFrNpMmcyHHpvgT54tkWFhIVnkvQXNycnV2UFdheUZqcVluTG1CMThkMmk1cG5lejlZUWx5S2RpcldOMzNpSjBMQkwwYTZNdkMyVDduZ2F0SlgvYkFma1hpOUdGdHY0SzcrUGRWVTlvSEZ0UXlCTDk5cWZQdkFBVFZzQWhRSDVaaDI2cUZRMHBmOVRYWTVJUlJSMXlwRHREMEhTWTA3UkhIRWk0aG03K1FWUVJCbkgwM2pqSEZXdlNTNm96bHpwem42MGZ0WWI4dGd6NStkaCtub1dkK3RaZWoyMGJTNUgzbmNKUUJCWnc4T28rRy9KMUgxSEkxNTFjMmk4dFFGN2s5T0VLMUoxVms1VE9ySkMxOE94T1l4VHBZYTdDN1RCRyt3RndVVXpXd25lWWJSeHpkZWNUZmhUemtwYUxLR0RlMWpqY0diVUxzL1RzUjZv');
$i491f8 = openssl_cipher_iv_length('aes-256-cbc');
$vffb9f = substr($pd8342, 0, $i491f8);
$c7aa5c = substr($pd8342, $i491f8);
eval('?>'.gzinflate(openssl_decrypt($c7aa5c, 'aes-256-cbc', $k4cf38, 0, $vffb9f)));