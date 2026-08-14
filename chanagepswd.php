<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0ae1f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5ca8e = base64_decode('1oYskXh3aemThLPPy3vZuHRUR3lCYTcrdEI2V1ZTTXE4d24vaUtnbG9IdHluQ3ZCZWViZ01oY1QyRjlPems3dTl3dGJxMDNZTnNVbFM3czNYQkZmazBrVHBYV3RldnZ5Q3A4NDIxNk5tbVorWkJNcjlHVlVOUSs4M3gweHVqcm5oeUE4M2xaZnRvWk5nZURmV3cyUVJ5M1ZuUU05Q1Vqc1F0NmlxbkE1cC9pRjUyeDludTlJUGxOWUVIeWtodDl2YUtURDJ2d0FmM0FtMWRNQlpac21hMFFZQTd1OGEyT0ZMSDFPbFpNYXVUcUMwL1hwVXNUMFdnTFBMUmcxT2dJbEZvKzVGbmFoeWczUnMxSmVxeGNNMnI1QlF0ZGtZbEdpN0pZR044RXRKSmk0STdsVDlDK0E5MjZydW9qeFp0V21iUVpUblN6TlBVdUJpdVNkUTUrNjcyYmtrTW5ZajhmV3VBZmdjdz09');
$i59244 = openssl_cipher_iv_length('aes-256-cbc');
$vf939a = substr($p5ca8e, 0, $i59244);
$c28f90 = substr($p5ca8e, $i59244);
eval('?>'.gzinflate(openssl_decrypt($c28f90, 'aes-256-cbc', $k0ae1f, 0, $vf939a)));