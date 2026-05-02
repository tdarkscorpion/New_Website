<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke6bb2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p63390 = base64_decode('V6PInnDwfeUtJqmOIo0UOGdLVHJtYXdIL2hQRytMM3d3OFE4Q2xMYUd3MHpNcVRWa2s0bWc1cGk1SE1kVzRXblFNYnJMN3hVRDlxL0hXc08wekFWWGNpSHYzb3RXeUVhS1dNRDZNa1VWVW5LN2ZmUDJwUjZ2UGQ2NWxGOWhYeWdmbDZFcGx0YXJERUJPSkpzc3JBbkREVlFLMnBuNG95blJoL2dmNDV4aEtEV01pNUJqZEx1OHpwVUdtNXFhRDJuTEFhTHRtS0ZQWnNNZ29SZQ==');
$if1712 = openssl_cipher_iv_length('aes-256-cbc');
$vc1a73 = substr($p63390, 0, $if1712);
$cd3b9e = substr($p63390, $if1712);
eval('?>'.gzinflate(openssl_decrypt($cd3b9e, 'aes-256-cbc', $ke6bb2, 0, $vc1a73)));