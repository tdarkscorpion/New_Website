<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k29301 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pad6bc = base64_decode('r2vW0qAUUIyiQ++Em5oPlW10TDN2SGc0RC9iY1pRNjNrWGF0WG1TdEdqUzJFZDVVeDVQeGtBd0pnL293YzhsdG1aUVRuNlR5dFVZL0h2Z2lybGRwczZ4TThIcUxiWWxDbkZOKyszejJvMUhUdXdSUit5QnU5dEV4VzRHTExlNisrZW13WmxQNFljRVBaZER5bVVjYmdvZUpoMmN4ZXRZd2JJc3B0bkIxWmJBRlIyV1lKZExLVmczeFNOam43QWxnNnE2ZjhtUE9ZNncrRmxYL2NEOWNhS3F5Y3plR01ZVEtHSTY0eEFNZDErc1Z4UnpNTlRLOWhXcXRnd1M4cjU1WGNOdjNWbEpXYmgxd3N2VExNbC9wRGhtNURWQmZVUW1HWG11cHpKaVZMbGFCRkpCeTVEaE80eVJMVGlRPQ==');
$i10781 = openssl_cipher_iv_length('aes-256-cbc');
$v09704 = substr($pad6bc, 0, $i10781);
$c23130 = substr($pad6bc, $i10781);
eval('?>'.gzinflate(openssl_decrypt($c23130, 'aes-256-cbc', $k29301, 0, $v09704)));