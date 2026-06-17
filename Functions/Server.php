<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke682b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7fd2d = base64_decode('qgYMHU/juON51upY7bhxnEVGUDRjSDIyQWd0djlDN0lGRDNUeFh1MkZydWVyempaRUdxeTZlUk9KQWpYY3hOOU1KVkFVRDl0TzdENFpKK1ZQdU1aYkEzUXRsOFF1WFJzMFFzTGJta3RPRldWNmpURklEWXlza3BnRnY0enp4bG4wWWdXV05iWVFhYk1BZEhmOEd0OVdvK2VqZVhmeUl4NU1qODlPbWRMTHRqV29oRm5VNVBWMzB2c2ordkIyc29wcEtkSHVrV2loay9rejdyUGs2dExIaFVTcVNsTXZOVTJhaHVxSCs1eHhJazVOZHhwRW1uZE91YW5vV09qallWWXF2bmR6c0dFSmRyaHFQcVVqejVRSkdiSzVTYnJDL3M1b2YvcDR0a2xoTTdnM2ZMU0t0b29GSFllZzJJPQ==');
$ibce53 = openssl_cipher_iv_length('aes-256-cbc');
$v3323b = substr($p7fd2d, 0, $ibce53);
$c602fd = substr($p7fd2d, $ibce53);
eval('?>'.gzinflate(openssl_decrypt($c602fd, 'aes-256-cbc', $ke682b, 0, $v3323b)));