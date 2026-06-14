<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k50b53 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbd143 = base64_decode('XCG/1yMec1WO6wqzwKz4nFh3ZmdHc01UYksySmNlYWl3dVVzblU5Rm9manBNT2NSK2JoRHFza0poNDYyNENoNXRZbUVzSFJVTGRFd2lsM2F4VCtSMkFoZ0MrQkhtNXNBL1pkNXJJSGJxMmZvSU92QTA1djZhcHJiZER6VjY3aWIvMEJiVDdycXlQcmE1RmNNVUx1S2xjaDVsVWJzWlJXcDY0VWtiS2lOY2dZbU9zYUxqa0R4cUNLVStSOUVtbXpTN0lXQVM5NFVSdXNacitBUQ==');
$i84125 = openssl_cipher_iv_length('aes-256-cbc');
$v3d9d6 = substr($pbd143, 0, $i84125);
$c3c731 = substr($pbd143, $i84125);
eval('?>'.gzinflate(openssl_decrypt($c3c731, 'aes-256-cbc', $k50b53, 0, $v3d9d6)));