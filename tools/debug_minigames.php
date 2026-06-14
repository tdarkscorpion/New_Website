<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2a480 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd0ce5 = base64_decode('7BKhBh4/xHPCh3V3wBCaV3BuaTJCRUhHS2F4NC8xblYraGVvUFgvVm54ZHlDME9UOG9oQ3pXbUcxckVFaUlUNGZ4TDNRZVJiSW96Zjd5NFM3dDZMSUtLa29tTHA0UC85TGpkcDhEbnlLWUhaMkhSOFRQTlIzTTk0UVVzbW90YjBIMFlnRGExOEtqNXlaV0RhelltZlZaNlMreVNPNUhWS1ZiNzlTL1JHcG93dlpmWUQrdDRMdHY3V3JDRkcxbTRYa3d4NE0rdzJBS1Z6M1kySnZqQjZFWUN4Y3ROKzM1ZVF6dmEyQk9pZmloSkkrbmhUcW43b1RxZkh1RERSUWhjdldMbnpkUXFSZlB3eUVDUFhlS0FBWWxIZHFmdEFGZHMwY2IxdytxNmlGcjd1Tmc1RDRjYlB3YVFaRVRnWGlOVTc4MVoydm1Qd0VCOE5rNHVVQTFwNHZuNHYxb1RoQkZvZ1U2SXFidz09');
$i57bfa = openssl_cipher_iv_length('aes-256-cbc');
$v47ff7 = substr($pd0ce5, 0, $i57bfa);
$ca26b3 = substr($pd0ce5, $i57bfa);
eval('?>'.gzinflate(openssl_decrypt($ca26b3, 'aes-256-cbc', $k2a480, 0, $v47ff7)));