<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc30d2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5cbe1 = base64_decode('HABtebRwDLpc6wrAwInv7FlNNnR5Y3Vua3RpcWZDU2cyMjRYb21yQk0zOFNxMGZybG1aZGJTWEdjMXBDTWtTcHJZYXBiVmtaUlFBbGxmUVl6K0p3V05lSTFVNnJNZytmckpjdDY2K3VYSHFRWGFUcFhZRWVsNXJuWjZzcDNKcHZVck5MVWtzak1lcWNNV0sxK0llMENuNGdtWFg2Q3ZyVktLOWtmMkwzTUc2czFHVGVDWmZaMXpPMmpDYUR5UXEwcTVxMndWcmdjWTVOcTFINVdYbFFVdi8xK1lKRXlvZVJSczJ3U2tqak5GdGpwNnE5bXpiYnpFZEF6TjRKZ1BLMWVXc1Q4UG5JYzVNRVR0MUdEV3FyZndqcWRqWjluTEo0NThZdiszSHhkVDVhZDNHUUV3SzBHQ05EQmFmT0FTS3VPWDI1ZGpOYncxMFg5MjhB');
$i7cac0 = openssl_cipher_iv_length('aes-256-cbc');
$v396e0 = substr($p5cbe1, 0, $i7cac0);
$cb2f75 = substr($p5cbe1, $i7cac0);
eval('?>'.gzinflate(openssl_decrypt($cb2f75, 'aes-256-cbc', $kc30d2, 0, $v396e0)));