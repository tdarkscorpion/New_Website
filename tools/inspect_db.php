<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd462d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5fd06 = base64_decode('lXuSWVUwdQFBi+75cPA5fE9pYk1jRXJRRlRSV3hNS2liVEJFVGd1WWszd3pTdE90cDVoTDB4U1k4dzQ5eTlhN0hCbnVzSnplaDJhWHNSVHY2dEhPWVdHeHVJa2hEaWtaSnVBVXR5UGNvaEs0SXlWZ0ZWa053KzUyNk9ISlhnMGExeEdZQzdWakE2KzVScTM2RTVDZmZBRWZFMEhDaTdzZGhnbU1GN1V4K3JtdzBWZHIra3ZWc2lDR2R6c2lEdmlwNlF2ZE9zaEVRVWRQRSswM1ZKRlNDVzUxb3JDR2xKN2Z6b1RQcnc9PQ==');
$i51d5e = openssl_cipher_iv_length('aes-256-cbc');
$v7abab = substr($p5fd06, 0, $i51d5e);
$c7cae0 = substr($p5fd06, $i51d5e);
eval('?>'.gzinflate(openssl_decrypt($c7cae0, 'aes-256-cbc', $kd462d, 0, $v7abab)));