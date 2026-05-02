<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc0527 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd6d0c = base64_decode('zkHqNtZEr3OB9mNBrondhXFQNjRpTCtIblhXTzZhb0xxL09pYll0blNDVTMwV0gwZ1pKdUZuQ3Z2V01FVDQvU1AwQWhPTHdiYXNXeTJ0WmR3VDN1Vy84NUhBVTJYWGhJQnNPUnc4N2daWmNsTnRwWW1nSm91cTVrbEQyM0RJWUdrNUQxc09yZlI5Y0I1TjhyZkJ1UElhZXZPZ2NidmtWbUdGaFhJN0trV1lSTXd0MjVKVE5lalVLRWtBcUwvVC92UFJ5NWw4b1RLcWVOeWxIRTl1d1FKNlB2dzF1eUhiM3FaMElwRW85bkVTRmNMbU1uMHpvT3JqMWVRSStqRC93NWllN3hIZGN4RVZUSkFhbmFId0c3STFUclF6b1B4VXFXNlFMSWgwb1VIblErNytzZXdXTjlWM05YeGpnc21Ja1dWeXIvdFhiQUw0eUVGaFlBYWdjNUpRODdiUWppMTlSNHZPK2NpdytXMWhZMzh2MWh5Ykp6UWx5cnVZMDJKUUZZTElkTjZuMGp4dTNjZWZSM2l1Qm9EMENWMkg3REk4NUZOakVVZUwveWs0ckhQa2syaUR3QnFYbytHNm41TysyLzY2b0ZnZjk2Mzl0UldWNG0=');
$if1f1d = openssl_cipher_iv_length('aes-256-cbc');
$vfad6e = substr($pd6d0c, 0, $if1f1d);
$cb7fc2 = substr($pd6d0c, $if1f1d);
eval('?>'.gzinflate(openssl_decrypt($cb7fc2, 'aes-256-cbc', $kc0527, 0, $vfad6e)));