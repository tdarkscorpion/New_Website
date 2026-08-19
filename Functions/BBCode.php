<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k24796 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63419 = base64_decode('skexIfSnUPVo+U7z1yfCCDQ5UUVGSUlabXBQWlI3UFNrSDlpbFNZeXovNGMzYVErNkttSnZKS2ttS1V0djdwa0NBcWJKTTBvZjZMeWprdnU2cEVPTVNOWThYcUVJb25VdHJTZnZOdHhsRS9acnhRUm0xdkl3UjdCN3M2S2xjWndwUkRjSUZGR1kxWVFadmZsYjFPajNBTWVWZWNXSjUzZVVoRWo1UytrK1RsZEZpR1hWNlk2eENEUktxS1VJRzZodTVBdG5HTXQwOVJEUk5RbkRyWlRHbzNFWHRXcnFQTWtKRDhSbXN5MFIrbEtNdEtGY0VNR3YwMjF1b3VhVjJrK1lEVE44MmRQYnRiK25DdFN1bk9ySlhiRFVWYnRTUC8xSlkxaE5JMEFreFVLZGF3Z3R0dExJM2Q4QnRNUmk5aHVJcjZZdkdrUDUzdzB1Q0gx');
$i7e39a = openssl_cipher_iv_length('aes-256-cbc');
$v103c6 = substr($p63419, 0, $i7e39a);
$cf8ef7 = substr($p63419, $i7e39a);
eval('?>'.gzinflate(openssl_decrypt($cf8ef7, 'aes-256-cbc', $k24796, 0, $v103c6)));