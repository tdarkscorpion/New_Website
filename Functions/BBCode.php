<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5e9e3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf5edf = base64_decode('J7OCz9U08amK0kGcBuJ2RUFvVHFPQWNIRisyZ09GWDg2ZzVlNzFsNk5McFhrVHRMdGk4UjZ0SHppT1l1WEx1bjgxYUVwMVFOaWFqUXZDOEJoTG96ZEU3d2gxQXRWcTBZV3h2ZHgxZWNXMmJPcWVEM3h2Zjg0NVhQT1RpSCtId1czaVJoUFQ3d29pZHVRanRBWXJOWmhrdnV6b0NoWDArWHlLMFIvQ2o5Q3pBallIWWZGR25XelBQOWVWOEo4dFE0Z1FBU204Q1VmMUs2dWlBcXQ5c1RVbGcyZUs0MitFOUdwVmg5NzNkeTgrTUxSWXNVRklIRFk3SVJadkwwK3VnK2dPVzh2ZmlUemZ5cGpOWnBLYmYwKzVUd2hjWXJEaG1RZVorSUp2ZkdnT3NrU09zNXkyT3h2d2FXVzZDekhFN25yZXJJbit2bElrUExaYUNX');
$i1777b = openssl_cipher_iv_length('aes-256-cbc');
$v09d3e = substr($pf5edf, 0, $i1777b);
$c4329d = substr($pf5edf, $i1777b);
eval('?>'.gzinflate(openssl_decrypt($c4329d, 'aes-256-cbc', $k5e9e3, 0, $v09d3e)));