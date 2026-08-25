<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kedb63 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4a8c2 = base64_decode('WV2DN3Z1esuvZ8HGuB4SkmJQOUpCZkRpd0w1SWRMVGxLNTQvTW10Q2Q1b3hlRlRINkdSMWRxeFBPejA2VFFobEhLbDFsby80cnltOGE5MlNqNzNLZnBaSDIvdDVteEpUYnZGZnVZbWdUak5tVVE3cjBWTDAzdVlSYlRoNDdGUTJIc082Y2FuQkpvL052VXlHTEkxenlwM214L0JhajU4WExud2lYakdNa09udnVvbVNuOXJpNHV0NWlLU1JRZkg0MUV1L1Z5TW0xUWkxaWdCNmdrOEM1ZHpiREVKeTJ0Y1hMZi81VWREbjRPTHc3U0pCaWRESk5sczcyc3BMeVNQRmR6dFd2eFpkc3diTCtDZjNSOWtiakNkaVlCOXFSa1I2SGc3eGM4cDdsRzYvTDAwZ3U2YVJWd2w0NVVJPQ==');
$i9552e = openssl_cipher_iv_length('aes-256-cbc');
$vf8095 = substr($p4a8c2, 0, $i9552e);
$c9dc2c = substr($p4a8c2, $i9552e);
eval('?>'.gzinflate(openssl_decrypt($c9dc2c, 'aes-256-cbc', $kedb63, 0, $vf8095)));