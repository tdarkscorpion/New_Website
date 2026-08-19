<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf9e85 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p11d31 = base64_decode('Ri+PyXZ/UL1FtSA/vt17IkZVNkFzZGJScnRPQTFKcDlCR3VKbGVnNitqSVN1R3gzQS9zcXpYUjJwdXp0UVRtWG1SS09neEN0WldIOEM1T3lJbTNiVDVMRHhta2xQckpQRVRrK2s5ZEtubk5MMHhuajFYWkRmdk8zejNna29jT1FUZS9YY0R6YndzVVNHYW1FTjhZUERGWStlQjQ4WUFhbDhjWHpjVVNqWGtVYThIc0tJaFBiY3BwRmtGSUs5MXJCb1htL2NoTUplWEhGdVBlQnNRVC9MY3U2N3RhK1JXSWRPSWxoL0ZtSlg4QVowOGdEbXBBZTZZRGpRSFVsN09MU1dwMTdRVXpDUi9rZmMzRTVFaWlPWWpwUnpNWExIOGF1ckFpOFN2dTdLeEZlTTlmWUM0ckR2WWdmZlZzPQ==');
$i12af8 = openssl_cipher_iv_length('aes-256-cbc');
$v99e25 = substr($p11d31, 0, $i12af8);
$c23f61 = substr($p11d31, $i12af8);
eval('?>'.gzinflate(openssl_decrypt($c23f61, 'aes-256-cbc', $kf9e85, 0, $v99e25)));