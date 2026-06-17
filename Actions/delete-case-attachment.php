<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6c42c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5e62c = base64_decode('zSAmshvvWXCT59Lk7QMqvnVjY2trRDBjUjUwQUZlWHNyd3FtTUcwN2ZraEdKdUp5YUlZR1ljeUdjRWh5RFJCODRMd3gvcDVvNC9HdXJVMFlTcjZiNFhST0l3aEtIenJRU05hZncrMTVCM0ZoWXpadE85WmhLR0hySTFuM3ZWS0NscElEd0ZQdUxTVzhGQlFBN0hqaEgzb3VxM1ZNdWZYaUhMeVlTWk1YOHpFeVE3OEFHY0tGUnd3N2pSaVpHaTlZM2hQM2Z1YmlJV1d1TDlvaWxKNEdOaDFzZ1p1L3NpRlVIWDYrOE5TMVI0L0FybmVUcENGK252Ung1a2xGcys1VzV2dkJDT3BKYUd4M0FLQW8xTFFidHZ1NjY2L01OU3d4SkJibThPZWFGQk55ZHduZlQrbVZLRWZCb3hLKy9jNVp1ckRtdTVVRmZWZURkN2sw');
$i12df0 = openssl_cipher_iv_length('aes-256-cbc');
$vedca7 = substr($p5e62c, 0, $i12df0);
$cd615b = substr($p5e62c, $i12df0);
eval('?>'.gzinflate(openssl_decrypt($cd615b, 'aes-256-cbc', $k6c42c, 0, $vedca7)));