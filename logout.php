<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k93ad7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa0b74 = base64_decode('PvhwKBt4+LaPzDl3g81+rDdkOGN2R3RQUXZBd0gwY0I3bVdpUGx6NlgvaHA3cmd1MjV6dW1tZ0cxdU1VM3h0ZnE5dnBBMUpRV1VKM1VYUDBvQURKYnU0ZEhGcFFqd20zbGU5MDZ5ZDRGRVFucHV4TUtxNkJzaWlSdDBJPQ==');
$i3cd57 = openssl_cipher_iv_length('aes-256-cbc');
$va37ec = substr($pa0b74, 0, $i3cd57);
$c7e6bf = substr($pa0b74, $i3cd57);
eval('?>'.gzinflate(openssl_decrypt($c7e6bf, 'aes-256-cbc', $k93ad7, 0, $va37ec)));