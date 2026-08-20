<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb67ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa332a = base64_decode('BWAhncIdmQcRg4adaNLOdi9OTHdsRzA2amNzeXh3Wjh6cVljOFVHMGRUUmJrV0d5TFBGTFVYaCtEL2VyOUVPQWQxUnpGMzBWT3JVZjBQcHUrc3FmTUlSYnF0NFhLck1KKzBJZkhqN1hYUlFyazV2TTJJR2VINW5ZdGUxc1lHUGFidU9uSWY1eVdPOGRYMm9JSTNrY0RpNE5vdy9Dd2FBZHYyVVVnRjlmcDVNbEkzc1ZCQnNMR29RS2RMNDEySXdpeWp4VXY4U09oNlBrUVdoaUdhbHYzcE11K2xqeW5Od3J0cmJTcFlsWjJsMkJnOXM1aUdYSjEvRkN3cjNSUUFydWtrWTZ1UHliaFVCOGdIMmZFSGVMUldDaUFlTENnUHF5dG5zOTFIdERYRWMxbU1yQmZuY0hxazRObW5NPQ==');
$ic2942 = openssl_cipher_iv_length('aes-256-cbc');
$v57542 = substr($pa332a, 0, $ic2942);
$c09cdc = substr($pa332a, $ic2942);
eval('?>'.gzinflate(openssl_decrypt($c09cdc, 'aes-256-cbc', $kb67ae, 0, $v57542)));