<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf7437 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pda986 = base64_decode('cWdc29+LsDnxZhwivN6C/DJJa005VUNPVjFyTjkvYjZmQy80V3JjelprZDdVODc3NWQwM2hBeTJKbHJhUVB6eStRb2JNTkhiM011TkNQL2dzNmlDcW1mNEFWREdjZjFiaEU1UXNLWXo1R0tqYnJBNWtWQStWWkZHcEVFU01IUnRSYVU3RWttTkZVaC9MMitaMkFKVHlBelc2d29BL0R3ekpXVEVyZVlFSVFHZTNBMWJxNXBBMW9wVXdPNEJ5Zzdwc2c1SEVmZGNxcGV3dkFnRXg0YnU2eTN0RVhRM2xCVkhqTklKMk9jUDkwMkpTMnpBeHRKakVBck5MRy9EcGZSRktRZjBkVXlWNGZudzJObXA0NStQY3BySXFrVVlYZXFEK3lvOWxnPT0=');
$i5e8ed = openssl_cipher_iv_length('aes-256-cbc');
$v203d4 = substr($pda986, 0, $i5e8ed);
$c930df = substr($pda986, $i5e8ed);
eval('?>'.gzinflate(openssl_decrypt($c930df, 'aes-256-cbc', $kf7437, 0, $v203d4)));