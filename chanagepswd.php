<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf35ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ff7e = base64_decode('M8/zjsjyIK7UKsb5ZoFJd3FiV2h5NjBoRk5Zc2VvRHRSRGVXVExVSjhndVA0aHZGeFFTVVA5SEpUWkRDK2ZXQ0IrRnJjb2oxYWVEcDRQNU5HdjJ5YU5wRk9iME93VURCMGVzN0ZrclZEQlRDamZQb3M5aklkZURWM2Nna1BBMGlDS2hkZUo4Q29zVGpOYWZxakJJSHpkTGU1MFRoZ2R5U0VlM2FPT1VJZEdRZEk3a2ZuQTBHcnZ1M2xEVWYrNmduczZTSUFKU0VBSGYvRVluZEF1WlF6WnpDVU9GUkd6cTR6OG1FVU5OaHhObjNOdlNxTDEyZThkQ3JpQ0V0dm96SjN4NWEwNEVPMUtTQjhRdmtrbkF3NmlLWTdiQ2tYR0ZpV2g1bEIvald4SDhvVDcvMXJFTTAwUlErUGRlUjFpWkl2RGxzOW9pdk14eVUzK3ZpSFVqUjJuMEdwVmdmRHpBcUorOGNkQT09');
$i55d55 = openssl_cipher_iv_length('aes-256-cbc');
$v49ed1 = substr($p8ff7e, 0, $i55d55);
$cb39dd = substr($p8ff7e, $i55d55);
eval('?>'.gzinflate(openssl_decrypt($cb39dd, 'aes-256-cbc', $kf35ae, 0, $v49ed1)));