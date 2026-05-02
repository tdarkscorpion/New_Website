<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd30b6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd8da0 = base64_decode('4YHoeflIch1II53OIkOiUWwyK1J5SXlaTUVWdEliQ2dVOFVNTWVrVTM1UWhrZWRqdmtyd1MxWmZ3czVKWmNiTGE0bWxCUk51U09BRVFuRnBDTjQyVUVXZ1paUzY4N1l2M0t6TXlBa0orV2NMK2hOcEdZVzBvOW56K0s3WldiNWRseDhCUFV1Y3ozOVloN05wek1kSjFpUisrbWNqVmhxVHVTWjJXNGN6bGo4SmpTdlQ0MWc5bk1BTDhMV3NUMkJLOVNnM01Gek5jN1RUbUJZa0IwQStZaE03b2VFRzNCeEdUOGtoa0F0OEp6WTZtMExESExLdEpJeUtyWENHa0pFbFdoQkZNTVJDcVp0ZU5xdmFrY29LUzAzZkI2ekJKNWU0MkVlWjMvK05tUWJhVFY2QnNuckl5TlNrZFU4PQ==');
$ibb798 = openssl_cipher_iv_length('aes-256-cbc');
$vb87db = substr($pd8da0, 0, $ibb798);
$cac5a6 = substr($pd8da0, $ibb798);
eval('?>'.gzinflate(openssl_decrypt($cac5a6, 'aes-256-cbc', $kd30b6, 0, $vb87db)));