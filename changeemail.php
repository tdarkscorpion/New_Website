<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k69360 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p57e4a = base64_decode('nR7sEt+YbH7a/JVjoUtp7VpFU1A0UFE0QkNGalVDbFpsNVBRSmJwL3R3Zmx3Vld4Rjg4elFhSTMvNk5aWmEyM2hsTHcrcEJVa2haTFA1dTY5dEVISFBiWm1Ha2dMTUxCSHM3aS9NNHhWQlhxWGFZQ2VOaUxmNVdQL05kQy9XZ0hlTGdJcnQzNjR2NEJmNDdmL0VsMXJNcnN5Zjk3TEdFa1NoTkZNTVdkUWNxMHluYW85eWNYeUtzS2hiUHFLZUxkVDdPYTh6UjJvTmV6WUNGSTI0Kzh1OWd3cnU3WjI2QnVZYkxSWEQrRUM1Z1pmeTdTMWU0STk3Z0tibDVBQzlzL2hPMzcxVzVUUlZIaStNdEc3MUZLTFkrVzkyeDVvakZqU0JQYUcxdmRJTEx6QnAyNjRMeW1Gb2Z6d1o3K2w5Ym1zYVRzQzg0NllpNEhKMWEyR2N2REh6Z2pnaldWdDRweXNMVTgyQT09');
$i8f9a4 = openssl_cipher_iv_length('aes-256-cbc');
$v230fe = substr($p57e4a, 0, $i8f9a4);
$cc7b37 = substr($p57e4a, $i8f9a4);
eval('?>'.gzinflate(openssl_decrypt($cc7b37, 'aes-256-cbc', $k69360, 0, $v230fe)));