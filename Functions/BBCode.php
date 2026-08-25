<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k03917 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2dbf2 = base64_decode('lny4pmBBT0Tx9M/fRm8GdG43K3hIWEkyZzAvZFhnMWNmS0U4WGlDSjEwMUtCcnBWK2xwOWtCZk5NMngxYnVMRzRFTWVuUDg3WDBMTzRMdzdORmNTVHpIMGNwWjdIOXVmLzJjZXFUYmpBWDVrWWlySlpabFNvY3J4dWhPdGkzVXpaUVBGWWVpbkxxS3NMVzVlQUc2bVhmSFhxWWtUOTZiN01HS0Vva1J2ZVUxdWVZZ0s4R3pOcC85ZnNiL3RzanJUWlZQYlBXL0ZpQzBJcDhzWGNkTU9kU1JzNGJMSHI2YjFzVUN3UTdVY3V4RmNTZDRiT0ZhL2lWTGgrSDdTL2VRZ0hzRk01czJXQUpYaWZkdk03b2JYWmp5dGpJbTBWU0tWN1RCb09tU1F1WWVRSklIUGZjRW9MaHRDZ3pmcVpPVlVTNlR5a0FBUWJRUk9yby9l');
$i67967 = openssl_cipher_iv_length('aes-256-cbc');
$vebd9a = substr($p2dbf2, 0, $i67967);
$c19c9a = substr($p2dbf2, $i67967);
eval('?>'.gzinflate(openssl_decrypt($c19c9a, 'aes-256-cbc', $k03917, 0, $vebd9a)));