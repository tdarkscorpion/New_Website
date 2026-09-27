<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke8bae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p14f64 = base64_decode('iFRHuo8zsAAXGRbVpiKIyzl1S1pkUUFIbWpKbHMwSmQ5Um53Um1VMW8rNGNlMkhySEJHRzFrUi94cityeEtXUEluTGJtZXZ3L1M0ZTlsczBqV2lwVUlzWE9YM1E3U3ZTUnZOTU1aM00vR3RKYUF4MkpxOVYrbDVYV3ZJUnFQcnF1K0N3ZEs3Vko5M1dud3NHSE1wbVR5bUdMdGJDMWJNWE9ySG8ydk9NUVNoYnNSYXBoZFVrWW1BcEJTeXR4V1g0YW9oTVZodklrdzBqK0wwdUdVeTJqSzFwWXNVTEhPMmM4Rlg4Tkd3RERzN2cyVnZSelUwYU12a3l5eHh5SktoaTAxQ0Z2STRRY3pVVTFlM3VFYjRoVFRZTWRSUlNBeFFoRTlyeUJaa2oxNHVVZVBIQjlGblJpMFYzcks1UHVmay9yd2JRLytoZ1ZSeFdaZjZT');
$ic2363 = openssl_cipher_iv_length('aes-256-cbc');
$vee9d3 = substr($p14f64, 0, $ic2363);
$c12ad3 = substr($p14f64, $ic2363);
eval('?>'.gzinflate(openssl_decrypt($c12ad3, 'aes-256-cbc', $ke8bae, 0, $vee9d3)));