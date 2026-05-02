<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kba496 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8cf61 = base64_decode('YiXrkc59EzBuJ/Qwaao5WE5HbGpYcG1EZ3BzQUF5UmRsMVgzTGFNbEdtZ0t3VHYzS2xydWIzRERsbG9NNW5pZzJoWlZCeEVMK2luM3ZSWTdoVEZMOEFxY2ZOM1p5M3J4NzFDcjJvSWI1bTl3TkIza1p2bVlQMUhJWXErV2cxcHY2VC9RcXpXUTMyb3ZlZXMrN0pwZ043YVJmTFlWNGhqT3RqdzQyQkU5eWNRZnM2dld1Zk1HTTQxNzhKWlJ2U1hCWExUbXlVRXpHN3JMNXd5Rk5sSm4wa1gvcGNHUEpFdmxmUjV5ZW1TbzFWV2RZRTcrcVFBL1pxNS91am5Scy9YamRDRUFSYVkxVzVLUU9jNmFlc2lQSmFYaVh4UVNpTWg0OEJiVzFTMDhYQjV0eVpsK3E4aGhqNDZqSFo0PQ==');
$i1ecdd = openssl_cipher_iv_length('aes-256-cbc');
$v7c7bb = substr($p8cf61, 0, $i1ecdd);
$ccbb97 = substr($p8cf61, $i1ecdd);
eval('?>'.gzinflate(openssl_decrypt($ccbb97, 'aes-256-cbc', $kba496, 0, $v7c7bb)));