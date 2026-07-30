<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0044f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a450 = base64_decode('OVDP944wz4yjjYhoHH2utERHemxpQVJGYStzTVpJYlBnVm9xVkdQQU5JU1Z1cUJKcTdDMTVRS0loR0p3Yk9EMnZvampZSC82RWVIenFPQXZScDVEUCtYUWtZRnJEWXFQUTFZaUtzT3hEdUwvRTBPU1lsRlM4YmRsMFF1R3ZGcXE0V0lMaHVOc0VxR1JNeEYxSngzb2V3L0tIbW1PTU00MitlMUg5d0dsb3AxNmZNaXRraVdLekRxSEgzZGoyU3NNdmVaTFBUanUxblJsMi9tS1JOcE4rd0ljN2huU1E3dDNjWlFpM1pqaWpwNk4xcnpURGl5NFIrSkNTQktVb0RXVkRJckMwMis4UzMvNG92L2NFdnV4V2VWdjA1eVErSGRyTHBwSUUzaVlLc3cydGdjNTdxUTRscjhIUGYwPQ==');
$ic49dc = openssl_cipher_iv_length('aes-256-cbc');
$v8b7b3 = substr($p2a450, 0, $ic49dc);
$c480bb = substr($p2a450, $ic49dc);
eval('?>'.gzinflate(openssl_decrypt($c480bb, 'aes-256-cbc', $k0044f, 0, $v8b7b3)));