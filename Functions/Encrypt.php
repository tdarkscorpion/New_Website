<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaa7a9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ec76 = base64_decode('T2I7dq7u6cRf7z63ZAqG/HMwZW9uWmdROHlBWEpoNFRCL3UzU096N2tnLzlhNmIxcWduYUFtUjZTY25pMncxNmphNU9Xek1iUnhlQStCVlpCay8xS0VNUEkzU0RTQ2h5VGJaTG5GZW9yUGlwTCtNcG5BMXU5c25yZkQzRFdubjhoNEhEMjc3c1JUb3ZyUHpXQk9uUHdGR1ZyYTY0QWROREhsTno2VTdUMFdrS1hWOWlJSUw5NC9aeGlVNTlkZm4zMTZNeC90bS8rUmVQTmYrd3ZTaXlhNHcxc0J1TlYwY3Rjak1uYWNnMUl0a0pqYXBJQlcyOW9oUGdOVnlVVWRwbjA1a2dOZEZIU0V4SXdqNXhIcUQvM1V3eXZhYzFYNlV3bVhmRDZQVDB6RWRpdDVMUVhocElRakJibDljNGJ6SnQ4dlpSb0llS3dEYXlOaUZkOFFNbnYrblFEdjdva2F2SEpmUEcvYkkrMGdFYkxjOGVjMit5TkxxRlQ2U1Q0dEhlRkVnWm5NS1prQkJ0ejJmVmdIUjBvTVN4bmg5UndyUitjdXErcGhRbUYxdlF4c0hiKzRaVEZnV0NWRVlzdEFzNTFhQTEyazBVQmx2QmtlR1M=');
$i29033 = openssl_cipher_iv_length('aes-256-cbc');
$vbb27b = substr($p2ec76, 0, $i29033);
$c890fb = substr($p2ec76, $i29033);
eval('?>'.gzinflate(openssl_decrypt($c890fb, 'aes-256-cbc', $kaa7a9, 0, $vbb27b)));