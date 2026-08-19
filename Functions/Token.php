<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9a208 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6ecaa = base64_decode('VT1/MXywguKaAkjNXTy2X3czNGJVKzNHbEZLSEFDM1NFT1EzMkZGZUFtUnNYNWRUVDUxZGs4QUhQNm44S2JzTEM0V2RMa3VzTUJtb3h3bjExZjFHR2grSGszK01nMkpydEtuTVZpWVFBRjZtbjZ3WVNhSzN1bW5PTWd4SWFLbThaZjZLaUhKWTVVMkx4Zm1ra3V1VCtNRjk0Skp5S2czMGx1Yy81NTFybEFUYzd5UkpsZ0haZnFPUnhTeFZrb1Q4VmlmUmEwUU1CZy8xQTJheHM0RCtmR2VhV2hGYkhoNktSUzBSa2hYbUdKOEVTWVZzVUFiNVRDdWNwa0NnK3ROVG9hbGxCcFhqRVZkZUlhK0k=');
$iab538 = openssl_cipher_iv_length('aes-256-cbc');
$v36e89 = substr($p6ecaa, 0, $iab538);
$ce34dd = substr($p6ecaa, $iab538);
eval('?>'.gzinflate(openssl_decrypt($ce34dd, 'aes-256-cbc', $k9a208, 0, $v36e89)));