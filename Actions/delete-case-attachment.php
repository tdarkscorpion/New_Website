<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfab27 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p07e1f = base64_decode('5AUGeAZOh1XtZtgu09hsm2tmUFp3UXRRak1aVm5jZkwzTVJlZFJ5ak80THFlT1lJRzdWTDRsWjdudGhxN2lhQ0RjSTY3d0hWRTFibWVvaThnTmdtKy9mSzhnQTExRVVtSjFuRGZ1akxPR3FMN2l3dWFleHhRUUI2MldSMjh0R3BBOHBvQ21pajhoTndES3BmNk9zdWlaTVZ6YlFhT2xnQSt3NmR6c2l6ZmtxZjlyWGs3cGlyT3ZUR1hnZGtVbXVoVmFrTWVEUjgvV2JBb2ttRC9ZY21zM1NZNTl4NllXbVorcVR2dUlFMjcrZjVvK0RRYTU3dXU3ekZ1bHNXeFBreGJTbGpRS25ERno1cUgxK1FxaWg3YUNlMkszRmZBcGRrelRHUmxQWTFEMFdkWWcvR21GeDFhTTQ3bXZHU3B5d0ErWVZ2eTJHZDJWWld0WnBC');
$i03d48 = openssl_cipher_iv_length('aes-256-cbc');
$vb09b1 = substr($p07e1f, 0, $i03d48);
$caf5c1 = substr($p07e1f, $i03d48);
eval('?>'.gzinflate(openssl_decrypt($caf5c1, 'aes-256-cbc', $kfab27, 0, $vb09b1)));