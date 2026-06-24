<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k00ba2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4d128 = base64_decode('7rnKTgpbIkT3MtJpBBD3Pms0cUY4QXVpdHdwVHVWUlZwUW5jamJ6Y01zQW1KQVZnbjdPangwamtKbVRxQ2JlRThpOFc2TFBiWFRLVHdMbEZ4NWNzbVJ4SE1neVg0WTVSdjhZWXd1U2RkOWF3a0habXJ4bnh0TUQ1ZzU4OVdPeHNoS1RlVjlnT0syWGowLytXQzdESjYxS0lFd2dRdGlCOTdUUjg1TnpKS2pEbzdFeWU0RXVML3lhSmh1RjhaSmZxdUlWeUZTM1RBbFFabjRkY1ZLSWFZbVNmUUlwL0tDLzMxQVIrS3Q4dTArZnNITXowTHZkZDFtcnNCbEVpMEpQTng0WjUvZVJGckxxSSt4aEw=');
$i0f182 = openssl_cipher_iv_length('aes-256-cbc');
$v67cdc = substr($p4d128, 0, $i0f182);
$c6539f = substr($p4d128, $i0f182);
eval('?>'.gzinflate(openssl_decrypt($c6539f, 'aes-256-cbc', $k00ba2, 0, $v67cdc)));