<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kad6f5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a23f = base64_decode('lahpz4nAo/yAIpl1AGwpSytVdEVheDd4dk10SmFRY0xTLzE2WTIyRExoSDNwYlRtZnZzWExVbEh0VEl0Mlh5cWtjVmFYZW9vWkRlTFpxb01Qb1NRSCtYTzJldWxPRUwwZ2xHUHJzR2xveE9ocjVyQjNBTGxEVDhSRGpuY0hKRUNKT0YwMGx6blVwN0c1b3gzSmdBQk1UR252WlNYd3NMejUzemk3eGhCSERtL09Za3VIODFlU0dsQXJldmdXdDVYc01GMDI2cm9GT2hGQ2lheDg3a09mL1V0bHZtV3NJN1JSb01UUFdiUHNzdnJQV1JVRlV4VnJ2ZnlQN25CS1VmUElvVjVUV2NmV3FXQUNmT1hnWkFNTFBEN2Z3bFNPbkdsb1pHSVFFaHlsWXJwT2FWaGNLYzBhYTNnOTVZPQ==');
$i226a7 = openssl_cipher_iv_length('aes-256-cbc');
$v46532 = substr($p5a23f, 0, $i226a7);
$c56fa5 = substr($p5a23f, $i226a7);
eval('?>'.gzinflate(openssl_decrypt($c56fa5, 'aes-256-cbc', $kad6f5, 0, $v46532)));