<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1f135 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p33729 = base64_decode('KZDi8aNPrW7UeH3o8hYrCThUVkY1N3E3a0VuSEhBOGh4Nm4wWlBvcmhTLythc3N4WWh3eUJWaGNUeXp2SjJMa05kc3VrQ3dHM01vd2JSc29aSGszUmFhcjI1NzJORmt5V3BobzNtT1dXSjVnb2VvL1BFY3ZSbzd4UWhXZWRQUE5rdExGTjRRMVJiUGJidHg3SDY0UkRZTWJScEFQK3MzcnE2MyszNnJ2SHFPc3I2d1RHbklUb2lVbkpBRmtQSW5WckR5ZVJ6ZVRoWVptNUtDL0pVVllPZFNsZzE2MEdpSzZvVzdkMXNBcUhacGxhWkZGSGxhNG02aDJBUDhsQ3VZMWYyR1FHeS9tMjNrekJRNjE=');
$i7d788 = openssl_cipher_iv_length('aes-256-cbc');
$v9d7c5 = substr($p33729, 0, $i7d788);
$cb3f13 = substr($p33729, $i7d788);
eval('?>'.gzinflate(openssl_decrypt($cb3f13, 'aes-256-cbc', $k1f135, 0, $v9d7c5)));