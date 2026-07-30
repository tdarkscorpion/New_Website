<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k832f4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3cb82 = base64_decode('NzoXsmCzS+DhZWuSnbhTs1FRTm94SlpRK1BocUNUVXFVSnU4dVhhR1RHTlFSc0JoMnFKT3h5Z1pXekFuS051YldkTzdFOU1NVXBhc2RmbmNScnJub0VHMi8vbTBIUW1wWFpUcmtSSi9PbUVON1JTMkpod3ZOWVFtV21VK3AvQjZQMGp2VWU5UTN4VTJiekZhZjZ1Lys4Ti9za2tmdTVGL3B6TmFPZWVhNy90bHFvWXRNV2tFenBzS2F4MXA1ZWlqRTJIWU9qM3VaSDVybTVGODVEWUlBUHpDRm02MXUrdno0UEVmTmd6czlIeEYweGpxV1ZMZnZZMk9rWXBPMTZOOEdNMFErdXhycW9HdWlsWHRxbi80T2E3S0k2bDJPLzdmVVNYR1FpL0h3dURsem93QlJGVkNKY2swT3k4PQ==');
$i72653 = openssl_cipher_iv_length('aes-256-cbc');
$v24de9 = substr($p3cb82, 0, $i72653);
$c6e3fc = substr($p3cb82, $i72653);
eval('?>'.gzinflate(openssl_decrypt($c6e3fc, 'aes-256-cbc', $k832f4, 0, $v24de9)));