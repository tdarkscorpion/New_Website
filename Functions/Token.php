<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf10e2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc316f = base64_decode('4F+j9BeEaQuwk5xxzbrndS9ISGtSL3N3K3MzbjR4RHBPTmtuYzlCNEorbmlTRDFjbk0ybDRRL01wR3FEZnVaL1Z5YUtNbUVVbi81N2k2MEJLUlhUenVIWlFkdnI1R0VKeUdhcjY2M09oc3AxUSt4M05EZVd0OXkzazdxMmdZanUyYjRIZmNNcU5Ja3NTSm5EQzhBWlIxL0Z1SlhQdTRIbEc5K3UzMWdHYk91dnlIbVJ6RE9ubVVWdkMwNVVSREpDQlFQZmlPQkY0RUtZRGJua2pnVmorZmZ6ejM2QzdlSm5FNnV1am4rWHREaUJVNFhwZERxVTZMTjNUaUV0WVlUZ0oxUTJHOFJrU2hORjhwUGg=');
$i635d6 = openssl_cipher_iv_length('aes-256-cbc');
$vdc385 = substr($pc316f, 0, $i635d6);
$c79603 = substr($pc316f, $i635d6);
eval('?>'.gzinflate(openssl_decrypt($c79603, 'aes-256-cbc', $kf10e2, 0, $vdc385)));