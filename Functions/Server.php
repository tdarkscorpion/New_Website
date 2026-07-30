<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke93b6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2bbb0 = base64_decode('DuWtyBrWHtkO6E4GomOdqjVyWXd1UUNITXJ0QVBybElVTnZlR1hvVVI2WXdiWVhIUDZuRDh4NkROY3JSaHExVElOZzRueDI1VTdiUm50ci8yTWhHM0xTMi9CZExubmhCcDN6ZVlJS1VJSDVWaFFybTNvQ2tmdk4yamNNMmFNK2ZiNmhJWGRGYnJyM3FOWEZxMmFnb2VIMFl0M2NOOU9WMHhLd0lvaTJpMHBJZCtLdnBaN3JoSkFQN1ZIdUFhL2p0aDAvNW5NZDJSak1hWERSVHlaZXk4ZmovZUZCZytKZW5Hdi9FSjdEbVRYNjJrTlhmS1FaMlE3SExMYWNGcXFqWHEvM0pwRTRCMDlvRm5pQ1JEekduV2NRTkJub0lMTGpON1lxeXVJOFVtZ3lBMStsYTNZRGxoQjAycFhjPQ==');
$i8a6a2 = openssl_cipher_iv_length('aes-256-cbc');
$v03337 = substr($p2bbb0, 0, $i8a6a2);
$c01b1f = substr($p2bbb0, $i8a6a2);
eval('?>'.gzinflate(openssl_decrypt($c01b1f, 'aes-256-cbc', $ke93b6, 0, $v03337)));