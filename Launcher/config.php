<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8bb11 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p376e4 = base64_decode('lepiFO6jNxlu2YhZP999+1FKcURPcFJqbjlkczAxanA4dHlmQmhKdjFZSjRqMlFFSm84T3pDN1MzRkNrNzdBSjhmVlEyWFRDNVFweU1GTGErUFpBMU94TVRtOWJvWXBVeC81eXlPSGJVWTh6QVczNXBoZVZlS1JmUWNtS2hQVVNITXNuTzc5Qlo1aXN1eW1SSEw1aTlZVTY0NjIvT1c0bzFmekNocXhPbkJBK2Qwc2c4M0puSzBiVTFVdTQrUGNQdmhROEhkR2ZrbjRWZkhGZjMza1g5ZDRZNVlLYnZsZCsvaUhxdmo2RlVkc0tlK0h2cW4vWHVYOG52RVl6TDZRYWxUWlJyTmo4RktXYVFBZ2lCbzg2ZkNFbi9yWm5tYnkyazJaMHJtRG9vd0RTVjFsTjF5bXd1YlZHaEZnPQ==');
$i53b19 = openssl_cipher_iv_length('aes-256-cbc');
$v75078 = substr($p376e4, 0, $i53b19);
$c33b81 = substr($p376e4, $i53b19);
eval('?>'.gzinflate(openssl_decrypt($c33b81, 'aes-256-cbc', $k8bb11, 0, $v75078)));