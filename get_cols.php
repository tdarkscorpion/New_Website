<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8d5a8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$ped2dd = base64_decode('QaY+EkMDEBuOgV38XMvoh1BXczhwOFNSMjlnSlBCMjVpZ2FWaVZxQlFzQWFJM1lNVC9kcWZqSlBsZWZnRUgwZ3hsaWxLZ0ZoMFVxOWNnSlYyS2FFRDAzajNZQVdldG1iYW4wSGptUG93TUUrb0ZrWlkrMlBxVXJTN1pKODZtTFc0ZHZacDZuQWtPaCtMa1VTVE9qWWQrNDlqWUxVQS96RWFsaXFlR3Z4NTVheUkvUnU1TXdybE9QUXUrUmRCTXdNcGU2UXowb21QeUdpbHBQdTNrMThtQldUc2xZU0gwd0NIK1A3Znc9PQ==');
$i487e6 = openssl_cipher_iv_length('aes-256-cbc');
$v87fd9 = substr($ped2dd, 0, $i487e6);
$c8a556 = substr($ped2dd, $i487e6);
eval('?>'.gzinflate(openssl_decrypt($c8a556, 'aes-256-cbc', $k8d5a8, 0, $v87fd9)));