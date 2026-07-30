<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k85a1d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbbd6e = base64_decode('1WEO/T8bfmdUdx3EMilwj2ZJRmozNjF4YlM4N00xOWZ3SWF0SytKTWxPYnB1WU5Zc0JSWkRRdjlkNnVCVEVjaVNDVkNOcXUzSmhIMkZiMGJZS0FSUVcvS0VRcTV4Nms4c1ZyQll5UUZwRkgyMU94dmpNZkpqc1c3QTQza2g1eWZqcHk4VDdtMElMWktGR0VXK2xxcFBMNzhRdjJzS3E2VTR1S01CSGhNa1JDaVNWUXpnVFN5L1FHVkpxL1htdHJ6djNtN1ZKKzlzTXBrZHduRmxna1dxc0lEYXBvZkVXeERYSmJZYnhqTlNRK0xMbHJHM2RzMVZscE1HQzY1ZTlidmhyY2pqZVhPSzZ2bkVKTjdpNlk1dTJLSER6ZzdtMk04blZxUzZoS09Nalh4YVhRTkUxVzJkM2pQeTNHdnNSa09URFNZbFFpa1lna3JSOGk2YXBteVV6aW0vOGUvbUVMMDA1Z0xJQT09');
$i8495b = openssl_cipher_iv_length('aes-256-cbc');
$vd560c = substr($pbbd6e, 0, $i8495b);
$c60d70 = substr($pbbd6e, $i8495b);
eval('?>'.gzinflate(openssl_decrypt($c60d70, 'aes-256-cbc', $k85a1d, 0, $vd560c)));