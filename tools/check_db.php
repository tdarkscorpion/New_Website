<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc65b7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4ebd4 = base64_decode('nLesZgW3JnaUenXB91/T/TVmN0pud0dIQWFTelVwb1VFYTYvV2ozaS9YYXNGcnRGdDRsT2ZqZTlpcGxJNU9rNTVBMk1lRWVDZHhYNDI4WEg4aGRURjkwUWUzNWg1NE1LaHdESUh0S1FHSThVRWRBRDdUNVU2MUh4ekNEUUlyNml1b2FmSXNlM3lFVVVyYzVwYzcySzVsVjhyaTc3dmpKN3o4WWFKV0k3REY0Y2EyVEFiaW16bUFjWnR2NDJvandmYS9LSWpzVkd6UnR4RmxPWlkwWHVvNWhlUEw2ZGN0WVVhZmo5Zm1IYTc1UzlXMmVQOG00QlVaZFhpUUdRdlVhY0kyc2hNeldJZUlZRXFpbFVwSktXVCtHY1phT0VBRlZYWHdOcVkxaVpNdzNETzM1ZEMyVlpwTjJOdUR3aE50Z2FRVG1EV0dxdjRnRHl5Uy9G');
$i0bcbb = openssl_cipher_iv_length('aes-256-cbc');
$vdb9fc = substr($p4ebd4, 0, $i0bcbb);
$c3ea7a = substr($p4ebd4, $i0bcbb);
eval('?>'.gzinflate(openssl_decrypt($c3ea7a, 'aes-256-cbc', $kc65b7, 0, $vdb9fc)));