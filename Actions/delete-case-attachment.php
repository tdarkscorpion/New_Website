<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5ede0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbcb91 = base64_decode('YUu8U3hJyL+3LCypft4SsGxZa1VTMG8waXExRVNRdndyZlBjYmFJd01xVHlnaU52bGVzcXlTR01yNUtXaXBEUUFCNHEvSHdjWEZpWUVaczRvb1JjVDdua24vWDZaNHpHeDBDNTEyMEZRdWx1dUlvWlova2FOb3AzKzRXc1pxcFNPM0ZCcmVsNmdSVlFEYWY2Y0xzMmhERUlyaDJiTUFHMDFJNVFMc2JKeDNVcHBvUjMyRklrQkp5UGJMRFhoOG9XMjZzWlBJaWNaL0pxWURNMkZSYjlOL3F2ZlBuaTNheVpXdUJ0OXppajIveTNyRG5DVnQ5RU1OYXlyVTB0dG00Mjc1eVZJTVdwQUEyT0pQck5DQjlBcCtYanlvZXMyTzl3MzJadDdHZVo1YUZJKzAxZmFuYjNDbDdoeFVKT2pnUjZwV3MvaGtrcGt4VXVvVVY2');
$iffc40 = openssl_cipher_iv_length('aes-256-cbc');
$ve0c69 = substr($pbcb91, 0, $iffc40);
$c62442 = substr($pbcb91, $iffc40);
eval('?>'.gzinflate(openssl_decrypt($c62442, 'aes-256-cbc', $k5ede0, 0, $ve0c69)));