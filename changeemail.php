<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0a5e0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b508 = base64_decode('BlMOMMvXe1JXzBdoofKvOVpCa0NOd25ZdlNWMGdCU3ErREMvM2oxRTFWTS9USXRxSWVTSVFDNFhQNHBEZHlMK3JEQ2dwNGZMd0UxY21icnRETzVtVmg0UUE2YVpvcmYwc0dKLzZQaWVMc3lvaGJLbEsyVXE1SFlmSWllY0FEbUZDWHc4MkpOa2FIL2dKVGdZV0ZoT0pGZEFaWW0xbEZuMjkzdUdqbisyNkg0S2RZVkkwSmtZd3hHbFN0QUc2aDhySVNudDBiQW83bXpFdmMwYnRGYzc0UnBXNVA0bXlNTlFHcEx6RjNWeXAyMkJndk9CcmE1MzJUZzJFRU9Vd3hBUjR5d1pka0FKdmdLTmp2U1dKNFVmalYvRTZSNllsbGg5SHJEV0VsSHV6QWNXR01uM0YrRDBHdDgzRVBLQTJTNFppSEZlY0IwdU82RVhXL1lzSlpxZGRBbUxGUEw2SnBoc3lWUTZZUT09');
$if5a7b = openssl_cipher_iv_length('aes-256-cbc');
$v899f9 = substr($p1b508, 0, $if5a7b);
$ce1667 = substr($p1b508, $if5a7b);
eval('?>'.gzinflate(openssl_decrypt($ce1667, 'aes-256-cbc', $k0a5e0, 0, $v899f9)));