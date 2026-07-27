<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k42892 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p655ba = base64_decode('J+pEVExGYjXReirIpVTCulorLyt5cVB3aW5HUG0rTVZXTmxMekEyR1NVNHR6dStxbDVPNFNVM1JhaCs0T2RNbVFVSG5yZmhBNDNQaUNHZ2ZzWkpHMFhtNWNJNlFLN3BkZncvVHVqUmRzR0Z2UEZyZ3ZJK1EvZzUxaGtlQkZFZUNibDViNnRkendzNGhPUm1ncWV4Q2ZCVm9yMWZZOElnZzRndnFBbEl2Mnp0VmUzdjNCS1VIZURBd0RmTTNZcE1ab29SYjlEbjRkMlU4Q3JhTnBVWHVvRjFRWEFYMmdMOEJ1R2F5eW9PdFN4WlRFU3ppUDhPQ0tuZllueXRKbFdrbldDQzhGc2NVZDdtVnAvZEZuSTU5bkV4ODVNcWsxMjNjLzhtL2t4TS9pbExyQVREak1ubG5JdUFPc09JPQ==');
$i43018 = openssl_cipher_iv_length('aes-256-cbc');
$v22425 = substr($p655ba, 0, $i43018);
$c48707 = substr($p655ba, $i43018);
eval('?>'.gzinflate(openssl_decrypt($c48707, 'aes-256-cbc', $k42892, 0, $v22425)));