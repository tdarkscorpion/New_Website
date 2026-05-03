<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k29d5e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6190c = base64_decode('170UrGXuW93ml3Dg9dWbekNPbGNXaVhzckZCeEk0KzZFV0Z4dWZMV05pc0lTci9aUmVwWTV5NFRvZTdlRC9wa1FETW5MbTlHa2VTdjNrRVRQSmYyWHV4WW1SczhXNzVub0FkL0MrN1JUZXZXQlQxcTJqTnBwa1VJcGpOQU5qRldjdUJNTitkM2pxT0hhc1RISFFQb2dkenlleTZuY2x4YkdqbWtkZFZEYWwrS01hSUEyWkZPb0NmcEU4VUZaOFg2TndmcklsLzM0ekRMd0ZDRQ==');
$if96ee = openssl_cipher_iv_length('aes-256-cbc');
$v9bcdb = substr($p6190c, 0, $if96ee);
$c4779e = substr($p6190c, $if96ee);
eval('?>'.gzinflate(openssl_decrypt($c4779e, 'aes-256-cbc', $k29d5e, 0, $v9bcdb)));