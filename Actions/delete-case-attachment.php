<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k98974 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd2fb3 = base64_decode('wiPR5kkiDh5tkxtNVC/b81RoVXRUMmZoRlk0cCthdFhVSy9XQzVEZitlNFJyMW5saVJ1Tm5mWXlYVUJCMysydzg1aWxkcmpjMi9YRjBleWd1NjhxTXVMMmlMWndWRk52U3BVaHErT1pRaTcxcFY1eWZNNEUyeis2RTVnWS9haUY2TkhJSUN1SDB3OUI0R2dkRnpiRCs1czRacVJURTZqZUhjaVYxMm5DUmlYQWRQRzZJYzNjMXJEc29KOWU1ejR3ME9TSW1uUTVTZTRvYnp1bnAvVm1DVFZGRm9GR0l3dVNDcXRtRzA5ZnptZDdxQ1U1dlQ0aUJoNVV5SzlkNjJqd01wajVXaFhibGZlNlNWUm9GUkZGMDUxMmZSNGs2aXRhNk5ZdmZwL0dIUUNqNFp2Wm1tR1hyVnF6U2g3VDdqQkVHUWwxcXZ2SHJYZk55VFNj');
$i36d1d = openssl_cipher_iv_length('aes-256-cbc');
$v0efe7 = substr($pd2fb3, 0, $i36d1d);
$cc95d6 = substr($pd2fb3, $i36d1d);
eval('?>'.gzinflate(openssl_decrypt($cc95d6, 'aes-256-cbc', $k98974, 0, $v0efe7)));