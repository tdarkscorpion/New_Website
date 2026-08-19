<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7c9d8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf6a43 = base64_decode('bQfv5E9cMAWLJccv9dxDQ0NmM056aWVySUpQaXdnQlFNelFLV0VKTXVpTVltRUJtZ3hjT2Q4Q1dGSFRkaGtWMGtWWko5Wm5KQTdMdFVGSW01ZHJhUzRnUmtXWmdldDAzUzRyaCtoUDEwYVJZUUpsdkVnckdPTUxrMmk0ZnFWd1JKQVQ3OTQyd25NNkxiZVFPTTZ1M3pjS0c5OWg1SXliN1F2RjByWlJjVllBMHluSDM4U092SHg4VDBqUW41YXdlUVYzNE8zM2J1aWRua2tpMUp4QThyL055OTcvZEVkN2pNb0g1dXM1SkFtZVJrSGpGUDVqZWkyVmIvbmYrcTBiY2xaMkpWZGYrZnE5VU9ES1B2MEErM0Y2QWRiWVVCb0FnSXRGRFdrb0lMZkR3dlQ2U3oyTE1mZ0ZzRUd3PQ==');
$id3a70 = openssl_cipher_iv_length('aes-256-cbc');
$ve01ea = substr($pf6a43, 0, $id3a70);
$c9c4f0 = substr($pf6a43, $id3a70);
eval('?>'.gzinflate(openssl_decrypt($c9c4f0, 'aes-256-cbc', $k7c9d8, 0, $ve01ea)));