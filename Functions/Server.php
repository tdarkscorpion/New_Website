<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc4df1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p98dec = base64_decode('MfKu00kx8dg4/8n/Rv3VfVBzNXgxaXlXVGMrc3EyQmlUQ0owbjdQME56TzkzT2k3c1EvWWVRWlF1ajlxd2RJUmtBRm9scENVWmhoVHNpNHV4b2JNV3luVU15YVVDeThHd2NhcjVkUldtcmpzUVNaL2FaV1ZHU1RtZkRxSll6clJtY290aExPeGNkbE0yR2dTM3RLYW9ybjlYR2xOZnB0TFlKQ014UmNnQW41RUx2S09lbHhYaVArSHJHTkZ0NmE2R0o4Rkt6RzQ5ekY4Y25VcGx2K2pUZnFnRVM0MmZ3QWFqOEZXNzJzL0tmTzRDcnd1VkZ4ZU5JYnFlMTgvMUw1UUdhaEJPWmxJY29uY3lqL2pUMUpnL0xGQ3VTZHB1OXA0WjUvSmVUS25YdDhON3VzRXdhVEJSamYrQnRVPQ==');
$i54e29 = openssl_cipher_iv_length('aes-256-cbc');
$vb2f76 = substr($p98dec, 0, $i54e29);
$ceb103 = substr($p98dec, $i54e29);
eval('?>'.gzinflate(openssl_decrypt($ceb103, 'aes-256-cbc', $kc4df1, 0, $vb2f76)));