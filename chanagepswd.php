<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75078 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf077 = base64_decode('AbN61wKt9MVtfpAbeMSLh1lSd1UyK2JhdWlRVGJJbWZMc1NidEVGdkFoa2YvYkMvNEtQS0FKUlg0YnlaY01uNmtQVUVDZUtSR3NmVTgwZUZYUE9wT0xxSDJYcGtDamNjNmxISy94SzdBcnhTMGpjKzFhNklhMnhjaVhtNVdDWUNxV0VvN2ZmYnFVZStoZHNCMEZXT1Q3K05ycmJYMXdsWGxHcGdTVHBlc0ZlaXNITVZXdDBSSUNLajNzalJNSEdNandsRVpvVEQ4MkJ1MmIwZGZESXI2eFRhMlU3MUwvVEZkcUFCZ1E1L2FqV2JzdkliMjVzYko0MlNNR0Q2SHhMTUNUMDZkUmNaSklwVHVYbmFmVDhpVzdRTEQvOFR0UjRsdXJEWjRUUXYwWWdGbFFDbkp0U3JHK0xhaFhqbGRyN3REVHBQU3BWTE9UemtOUm9Pd0JvN3F3WS94dXZJbExrUURWRnhIdz09');
$i42ad3 = openssl_cipher_iv_length('aes-256-cbc');
$v4d549 = substr($paf077, 0, $i42ad3);
$c7e11b = substr($paf077, $i42ad3);
eval('?>'.gzinflate(openssl_decrypt($c7e11b, 'aes-256-cbc', $k75078, 0, $v4d549)));