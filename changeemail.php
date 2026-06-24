<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka237d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p19d11 = base64_decode('3mqWBEPpujDEtwYktSIK+3QvZ2FuL0EvWlBSTTVENE5oWjdDR25Sa01uSlBjUExhNUtPc2wreCtpWXEwSzRqRG9VZkF3Qk9pTEU2NVlDNllERzdHMjZjQTBTSE5xMysySnZDcS92MWluZkl0Z3o0dXk5WDhBNWVIbnFxNWxRR2Nma0pqemNodlNLNThjMTZEOUZ3MGxKcExaMmZHSmxPL2ZuamtQd2x6VjN3K3IrWS9VSmZJV1NRbVlhYXpoQUdCSFpyTCtwdXRYVk1zU0J3K0JsSVN3emd3eU9zWm9sNnNMbm1lMFlDd1FKZGRXeisvczU3QXlKcnN6eVROR1IraHhXQUhpWkJoMGljTU1pdVJhSkpOWkxGUXYyNUVMZ3RTbHlBRGhtVzVLSGhHNmRycGdSdjZ2dTBqeDdBc0t5ako4ZFZiSVAyLzFUUndERld5NDBWcEM5VDBuTXlETzIwOHdaamQ0Zz09');
$ia415a = openssl_cipher_iv_length('aes-256-cbc');
$v78973 = substr($p19d11, 0, $ia415a);
$ce717c = substr($p19d11, $ia415a);
eval('?>'.gzinflate(openssl_decrypt($ce717c, 'aes-256-cbc', $ka237d, 0, $v78973)));