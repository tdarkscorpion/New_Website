<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4a709 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pac694 = base64_decode('a+BAYhWugRXrQ72eXT8WyFZ5Z3QzbzNkU1pYeTNXMDN5NXEzS0JGemF6WHhTNVdhRllNTW9VTkxjRE9vdkcxMkUxMFQxelhKOFlHNDl0ZnJIdWFFNXRGSkl3YVpwNFRicmZMUU1NN0x5bFJpU3BLbXQrMkFlUys4ZmVHbkZMVEhvZFVuUSsyVEI3T2JwTExVd1A1akZoVy9sSkZLcktOSTI5UXl2d3YrR09obWN6Y3JMa2k1WVFvUzlScGNBYndUZWYwWUx3bFFEeEFvUUhoR2pRekc3UFhDNUNnUjAyMHNxd0E4NW5YajJmeWZid09yQ1BMUHFNWlVOWUtCQ3I0d3MzSUQ1Q0gxajc3cVplbkRtY2ZyTklqVU5tZDNEQ0ZMdnNkdG51TEJNVjVVN0VXSjNhNG9vendiKysvYnNYS0JXNEIvTDdCVFVMWU4wT1F4eVIyTkhnNURwbklxTGxIRnpYaUVRZz09');
$i0b5c0 = openssl_cipher_iv_length('aes-256-cbc');
$v18e4c = substr($pac694, 0, $i0b5c0);
$c10fdd = substr($pac694, $i0b5c0);
eval('?>'.gzinflate(openssl_decrypt($c10fdd, 'aes-256-cbc', $k4a709, 0, $v18e4c)));