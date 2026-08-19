<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2d16d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa0a4e = base64_decode('ISzb5acN6eQ5x9FAv5vXdExZVzVUZWt5Zi9ZbXlaWGtSdmpVYTZDWTBZaEIwNm9jM1ZVdmlzK2JpWGZXR1d0Skd2VWVmZ0hWZGFldlhwdTBHWlNmajMvYlJBcHB3blVsQkpET3NLbmlxQlI2NEd1MEZHNW1mOUJmd0VNWUlBcHRITERXUVNNS1Y4N084a0ZtOWNYUDE5ZzZuR1NBQmNQeEh3YitLNzhwUHZpMmlUVXRuRlBCL0YxMkY2MnhPV2xKaHVScTZac1pObURvaXhWeDg3QmJNUVVuNmYvU2RCWE1LRUFRTDhQd282d1hFMUVuM0w2ZUFTeUtwWXhDK2tEQXVHTFRaZWV6aHZGVG1YczdMZ0IzcWtmWVROdExEak1CUkZCM3dVQXVkSm9TSHo5c1AwTjJsZ1pHemo1MFo2b295S2dSRnVha04wUkVqakZU');
$ib6f2f = openssl_cipher_iv_length('aes-256-cbc');
$vcd349 = substr($pa0a4e, 0, $ib6f2f);
$c17478 = substr($pa0a4e, $ib6f2f);
eval('?>'.gzinflate(openssl_decrypt($c17478, 'aes-256-cbc', $k2d16d, 0, $vcd349)));