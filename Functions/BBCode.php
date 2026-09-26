<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7deb3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6d5cb = base64_decode('Gn5sjvxZ7jdCIItuq87cGGNPV1h4MlVpQVRUN0RFNzYzZmVDWXdocFYvNWlpUFBwYXNYYTVVdmYxS1BIR2dEMm4veDRRWTd1akFUK2kxcnpsWW9yWHVsV0RPVG5UeFhDQ280NE9MNVJoUGlLTCtyc1dkam5jbWV1VGhDQ3JaS3RpNTkwczhjM0Q4QmNlNVV6akh4My8xSGJ1SjB1bDZ4NFprc3dxOW96bXVyR2tUSGhib3pwdXZrNUg1Q1F4dHRqSU9YTzRRSFNEbW9yT0sxOWJNZGQ0ZDlneXY0SlJkTmVKQU02bjBNTmtCUXRjMWNGV1l3ZnMxQ0FhdjFzSnIxRFZOTmFUc2N6YTJQdDh0dFdTOHB2eW1EdjlMU1V0QWJ2cWpvZ1NsendsL3VucVhvMnUrS2s1SnJSamZUZ0w3TVh5eTZQRG9WSW1XanJsRW5S');
$i008ca = openssl_cipher_iv_length('aes-256-cbc');
$ve5f2d = substr($p6d5cb, 0, $i008ca);
$cd0698 = substr($p6d5cb, $i008ca);
eval('?>'.gzinflate(openssl_decrypt($cd0698, 'aes-256-cbc', $k7deb3, 0, $ve5f2d)));