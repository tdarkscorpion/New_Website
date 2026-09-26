<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k509ca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2773 = base64_decode('Y7O+Hd8fTaE/++QD2TmrHnp1bEF3K3RhVnNMQ0pUWFh3ZU1pUFFyWUx0QThwZnpTdmIvNHU2TzJGL1JzKzFjYWMwMHNzWU5pM0FEbE1OMGd2Z0JHdTg2S3p1Z1JHN0EzN2d4VUUzWGxDVE8wdGlGTjNBekNyU1djRXRJPQ==');
$id89fe = openssl_cipher_iv_length('aes-256-cbc');
$vf4abc = substr($pb2773, 0, $id89fe);
$ce617a = substr($pb2773, $id89fe);
eval('?>'.gzinflate(openssl_decrypt($ce617a, 'aes-256-cbc', $k509ca, 0, $vf4abc)));