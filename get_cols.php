<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd57fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8462 = base64_decode('vAYAoxO0gVSHROCB03tLbXdJamQ4U0p0dElXM2t3WEZrb3dXVm9BSUQ0SE4zd1NuVmNuOUVBam5UaVVhc0pXcm5GclY1K0lNR0owU29ZdjYvQ0F0RmM5dUNkQnByMlhhVU5XZ2FzdlJwWEt5TEhacGI2RU1paStMc2ljL1NCVXdEemJDVTA2TlR0SldHeW1idVd3eVZ3eWpjZmxxeituNDdZUFNpUTJrOWs5NUlyRG5LdDdQQlc4T05aNUVrejlLazJza1VtNGNuSHBUTnR5L0pYazVpRG1FZXVrQ1A3eERsbzdjL0E9PQ==');
$i4a1ec = openssl_cipher_iv_length('aes-256-cbc');
$v9637a = substr($pc8462, 0, $i4a1ec);
$cd133f = substr($pc8462, $i4a1ec);
eval('?>'.gzinflate(openssl_decrypt($cd133f, 'aes-256-cbc', $kd57fc, 0, $v9637a)));