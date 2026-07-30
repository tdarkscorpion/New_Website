<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke56d2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ba11 = base64_decode('RWl1SbkLoaTUhhoM8F6T+0ZwSnh5cDBqQk4yVlBnbXpkUm0wc05hNVpyQkZnWGU2d29wUHZRR3NDVmJ0eGFLbEJxbUtNakFSNHcrek5QZVhSOXZSVllwU0l0ZjRZZ3lvYVF5UC84TGp4Tk5wWi9vT2lVbitIWmxLM2Y4aUI3SXNER29jL0I0YU01WVdiWW80ZGpXMjFjVmE1eURqTlVjczFwRUZQWkpGdVIvN045OTZsMkdmd29IWVIxajlWbVpFeW1Nb3hEMWJiSEdvVnBFVDFySUllK3o2NEY3U2FDYndsdzBveERVZGhBZ2hXZmlTV3pGOUhicHdWaGYrbmJKd2dGcmZUaVNhYUllSWF1TSs=');
$i1470a = openssl_cipher_iv_length('aes-256-cbc');
$ve4e58 = substr($p8ba11, 0, $i1470a);
$c9cc75 = substr($p8ba11, $i1470a);
eval('?>'.gzinflate(openssl_decrypt($c9cc75, 'aes-256-cbc', $ke56d2, 0, $ve4e58)));