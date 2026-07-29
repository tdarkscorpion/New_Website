<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka74df = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p38010 = base64_decode('13DKO0GTuKs2g0h7CqXroUpzaUE3ZGJKRjU0OHJ2eVNBaTJLS1oyeGV0K2M0R2l4dnlsbUdOOHR5MTJCQ1dyYWRqV2R0QnB3ZlNjZzhxR1RNT1U5RjVac2pWOGdtL1JkYktSeDZQQ09mUS94MHJ6eVBVVzZwUnpicFh5SkU5KzMzdXBjMDRudHdlTE45RUNzQVlOalEvUkI0a2I2T2lIT1UvbUpSOW9kOTRZeVZaaTMwWkpiUFI0QjdXTStvUjFRdmdkKy9KZ2ZCVTU4VmNKV3hQaXdoMWd2STc3aVpLbDIwbGk0MlVFcUJSaVdqZFQvZFd0TlVsVHBiYktXZ0g5Y3VQblFJN1pjWlREcVhTRXYwOWRIWkIyaEhzT2JzR2VFT2tDMDR0VW81am1pcnkxaGJxenJSeTlnd0hnPQ==');
$ib56f7 = openssl_cipher_iv_length('aes-256-cbc');
$vfddb0 = substr($p38010, 0, $ib56f7);
$c6fafa = substr($p38010, $ib56f7);
eval('?>'.gzinflate(openssl_decrypt($c6fafa, 'aes-256-cbc', $ka74df, 0, $vfddb0)));