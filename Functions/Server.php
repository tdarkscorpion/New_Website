<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8cdd2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5146a = base64_decode('m9yk2xu83/kIPUiiVomAmiszbXVjZkNmZ3d4MTlJYVQ4SDY0dGRoS3ptaU5BdHp1OUZWS3RYMXF5c0ZSaTJ6a3lVNFlyazl0bnk1QlhodzBTZ0xnYjlNOHZpaWgrU2FvUlhDQTMrKzBrUTRlbVNlckkwaG5rNVVGb0pHdmtZTWdCMjlXMGM4OHgwK05mOE94MnliVVNSRmRKaTJKRjBTWkM0UndmWGhSVDZMME0rLzV1UnRuZzE3RHVOTFh4KzJxbC9XdW9iUXZnMFhZRW90QkJCM2dMRTNSY1lDWit1K0tycGtsK1hyWVJ3VGRHVHlBY3U5L3lOdEVoNDFraHVrUHhCenV6RHczRXRmYUNMT2FSaUQrREJMNHU0VFNLdjY1ZjBwNFpsWE00SXNMenJGNi91T2lqS3RRZ1FjPQ==');
$icbc40 = openssl_cipher_iv_length('aes-256-cbc');
$vbfad1 = substr($p5146a, 0, $icbc40);
$c01cd3 = substr($p5146a, $icbc40);
eval('?>'.gzinflate(openssl_decrypt($c01cd3, 'aes-256-cbc', $k8cdd2, 0, $vbfad1)));