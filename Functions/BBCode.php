<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k26f84 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a401 = base64_decode('wwsipIsTaGwpbpw3c2es5lFFUkFNUHNHMFIwSGJpY1pObVZCYVRBZ2d4Mis2Z1hIUWFoVnZXQzFUZWdYV2N3eDFIRklpT1JXZ2VELzh2R0pwUkEyWnFoc05laDNZeTBDODRBUko5N0hXRHRtSWZyQURpN1BZWUx4MHEvZHEraUg2UkszenY1YzNkbk56NC8zdldNWlpaM3RrQWs0QlgvQXZLSUI2TEEvN3hLamtYT0ZPK3hyMS9TblVjaTkvSlFCekw1cXQ4YmZkWWpKWkRqODAyVzQzZ1ZSQkY4Qjl2Q0hzVEZHdURCb2ZENy95eXZJZ1JrUUFRak15elRPeStWS1ZDUUd3d0owTU5wUGVKYkNlSU96dXQyNU5BaWE0Z2NMdjRNaUk5d0MreEdZdEp1L3RLNmJXZzJpMVJ4K3VrY3hTZ1VwQVh5aUsvTzVIY1Aw');
$ice6ea = openssl_cipher_iv_length('aes-256-cbc');
$vd7d1e = substr($p2a401, 0, $ice6ea);
$cde590 = substr($p2a401, $ice6ea);
eval('?>'.gzinflate(openssl_decrypt($cde590, 'aes-256-cbc', $k26f84, 0, $vd7d1e)));