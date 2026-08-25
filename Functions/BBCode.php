<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9a676 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f521 = base64_decode('kcllKHdSCBJOel2XBDoo4nJYOGEwWGg5NVg5S2g3WkVaMlpJZi9KUEo2dndKK0U2WEpOMDAvcEE4clU5b01ENHVsY3o0bHNHbUxlMi94dnVQM2lTd0F3YXlvNWIrZXBIOVlOcW9jT3pTblNGTnc4aE9XMFd2Wkl4OGhZcWxQRWt4UWkwZktTMTNMQ3lWZkpkSVlaZkhPT2JQZ2s5cDJtU2hCMHg3aUgxbkY0cVE4YVhITlQzenJna25KNzJmUElsaThnaDVNZUlCRStUeDgzMjVZY0NsUnZaSThScVNodk9KNkR3cHhWN2VYZzVEOWhvcWNUM0FlLzZMVlR5aWUyL1l3Qk11M0ZwdWpKNkMwNE1tdUNPSDhJYXdoUHY5dEp3dndJS2E0UnVabHEwVm1wNnJQMnRQemJIWHdkazQwWm1TZmFMaWJvVjkySjBLWTJl');
$i9a0fa = openssl_cipher_iv_length('aes-256-cbc');
$vc0518 = substr($p8f521, 0, $i9a0fa);
$ca3441 = substr($p8f521, $i9a0fa);
eval('?>'.gzinflate(openssl_decrypt($ca3441, 'aes-256-cbc', $k9a676, 0, $vc0518)));