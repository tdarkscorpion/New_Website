<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka97c4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3deb = base64_decode('hk/4Bm7Ef40+yAXJBoPRuVM2VXFKTWU4b0t3WEwxQ0tRK2ZxUWUwcVpCSVBDSmZocVBrN3YxSXMwSjBEejFoYVk5WVpOUXdYRGdZbXBlKzZUWEYvVC9DK2d5dVo4THFmUTVvcmcwSnMrR05tTkJ6TkVqNkxsU1d4VVhESmJUWjNGakVhWVdRWmx4V2ZQWWRZa1d4YVQxNllKSUkrb0dFdm4weGVZUHlXbndTZ1RFTGNsaUlaS3c2RGRMOXVBcTdNTEhkMnA3akRrVXdDTUEveU9uMUlYdElMMy9sY0F5WHZyckUrV3A5V3ZFa2wzcFlXRzJoQkpEcFlrVTRSQ2M0V0dJZVZQV1NscnRmdXczTzNBN2ljblBVMzROdVgxamRjVXo2TWtRZFJ4R3Vzem0zU0MxRkJPSUxSTko0PQ==');
$i66ac7 = openssl_cipher_iv_length('aes-256-cbc');
$v500a3 = substr($pa3deb, 0, $i66ac7);
$cffd20 = substr($pa3deb, $i66ac7);
eval('?>'.gzinflate(openssl_decrypt($cffd20, 'aes-256-cbc', $ka97c4, 0, $v500a3)));