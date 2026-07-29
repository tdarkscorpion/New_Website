<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k25d71 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa98bd = base64_decode('bNaFJdDyv7PGHYNepcUBYndYSHlkSjIwak9BLzBNZWI0RnBGekNKeWViWlNzSFY0TDEza0tyTW5lbnZxTC9jckRNa3FXNFdFaCtYdFJsOGJ1aVZpMklDWm9TS0dvVFJRbWU2OFpZWHVvNkZTcHlWUUIwV2h4U2ZsRk81QXkrU1pMU01oK1ZuekxsTE9mWENaRWVMQUJOZDJnZnZmVWNMcmpPbkp0SzM5SW9ZYWVuVlhFSHdmSHVVRGpUaWFOWHE2QUNKdGhUWEZENHgwaEtUcGlUdnZtQVc5L2NyYWtGdW5Rc1NKVzZzVk9VTU5yV2E0eUhKYWlHaDNxd3pEdERxSG12WXBaenRQMDRhaUo2cmI=');
$i85d97 = openssl_cipher_iv_length('aes-256-cbc');
$v039ca = substr($pa98bd, 0, $i85d97);
$cd8007 = substr($pa98bd, $i85d97);
eval('?>'.gzinflate(openssl_decrypt($cd8007, 'aes-256-cbc', $k25d71, 0, $v039ca)));